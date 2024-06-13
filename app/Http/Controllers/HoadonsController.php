<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Mail\SendMailToAdmin;
use App\Models\Hoadon;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HoadonsController extends Controller
{
    public function index()
    {
        $hoadon = Hoadon::latest()->paginate(5);
        return view('hoadon.list', compact('hoadon'));
    }

    public function create()
    {
        $rooms = ProductModel::all();
        return view('hoadon.create', compact('rooms'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'room_id' => 'required',
            'date_in' => 'required|date',
            'date_out' => 'required|date|after:date_in',
            'num_of_days' => 'required',
            'price' => 'required',
            'phone' => 'required|numeric'
        ]);
        $hoadon = Hoadon::create([
            'user' => $request['name'],
            'email' => $request['email'],
            'room_id' => $request['room_id'],
            'date_rent' => $request['num_of_days'],
            'money' => $request['price'],
            'phone' =>$request['phone']
        ]);
        Mail::to($request['email'])->send(new OrderShipped());

        $email = new SendMailToAdmin($hoadon);
        Mail::to('tiendat@gmail.com')->send($email);
        return view('hoadon.detail', compact('hoadon'))->with('success', 'Đặt phòng thành công');
    }
    public function vnPay_payment(Request $request)
    {
        $data = $request->all();
        $code = rand(0000,9999);
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://127.0.0.1:8000/hoadon/success";
        $vnp_TmnCode = "TXTQFJQZ";//Mã website tại VNPAY
        $vnp_HashSecret = "TGZLHJCOAQSSJXVSCVXQDYZFOGBHSYOA"; //Chuỗi bí mật

        $vnp_TxnRef =$code; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "thanh toán hóa đơn";
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = 10000 * 100;
        $vnp_Locale ='vn';
        $vnp_BankCode ='NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

//var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);//
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => '00',
            'message' => 'success',
            'vnp_Url' => $vnp_Url,
        );
        if (isset($_POST['redirect'])) {
            return redirect($vnp_Url);
        } else {
            return redirect()->route('hoadon.seccess', ['vnp_Url' => $vnp_Url]);
        }
    }
    public function success(Request $request)
    {
        $vnp_Amount = $request->input('vnp_Amount');
        $vnp_BankCode = $request->input('vnp_BankCode');
        $vnp_BankTranNo = $request->input('vnp_BankTranNo');
        $vnp_BankTranNo = $request->input('vnp_CardType');
        $type = $request->input('vnp_CardType');
        return view('user.success', compact('vnp_Amount', 'vnp_BankCode', 'vnp_BankTranNo','type'));
    }

}
