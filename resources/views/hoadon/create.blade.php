<div class="room-booking">
    <h3>Đặt phòng tại đây</h3>
    <p id="success-message" style="display:none"></p>
    <form method="POST" action="{{ route('hoadon.store') }}" onsubmit="addcart(event)">
        @csrf
        <div class="check-date">
            <label for="date-out">Tên khách hàng</label>
            <input type="text" name="name" />
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div class="check-date">
            <label for="date-out">Email</label>
            <input type="email" name="email" />
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="check-date">
            <label for="date-in">Mã phòng</label>
            <input type="text" name="room_id" value="{{ $rooms->room_id }}">
            @if ($errors->has('room_id'))
                <span class="text-danger">{{ $errors->first('room_id') }}</span>
            @endif
        </div>
        <div class="check-date">
            <label for="date-in">Ngày bắt đầu</label>
            <input type="date" name="date_in" onchange="updatePrice()" />
            @if ($errors->has('date_in'))
                <span class="text-danger">{{ $errors->first('date_in') }}</span>
            @endif
        </div>

        <div class="check-date">
            <label for="date-out">Ngày kết thúc</label>
            <input type="date" name="date_out" onchange="updatePrice()" />
            @if ($errors->has('date_out'))
                <span class="text-danger">{{ $errors->first('date_out') }}</span>
            @endif
        </div>
        <div class="check-date">
            <label for="date-in"> tổng ngày thuê</label>
            <input type="text" name="num_of_days" id="num_of_days" readonly />
        </div>
        <div class="check-date">
            <label for="date-out">giá thuê</label>
            <input type="text" name="price" id="price" onchange="updatePrice()"
                value={{ number_format($rooms->price, 0, ',', '.') }} />
            @if ($errors->has('price'))
                <span class="text-danger">{{ $errors->first('price') }}</span>
            @endif
        </div>
        <div class="check-date">
            <label for="date-out">Số điện thoại</label>
            <input type="number" name="phone" id="phone"/>
            @if ($errors->has('phone'))
                <span class="text-danger">{{ $errors->first('phone') }}</span>
            @endif
        </div>

        <div class="check-date">
            <label for="">Bạn phải kiểm tra kỹ thông tin.</label>
        </div>
        <br>
        <br>
        <button type="submit">
            Đặt ngay
        </button>
    </form>
</div>
