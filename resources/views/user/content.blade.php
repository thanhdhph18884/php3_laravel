<section class="hp-room-section">
    <div class="container-fluid">
        <div class="hp-room-items">
            <div class="row">
                {{-- show danh mục ở đây --}}
                @foreach ($rooms as $iteam)
                    <div class="col-lg-3 col-md-4" style="margin-left:50px; margin-botton:-50px;">
                        <br>
                        <div class="room-item">
                            <img src="{{ asset($iteam->images) }}" style="width:500px; height:340px" alt="">
                            <div class="ri-text">
                                <h4>Premium King Room</h4>
                                <h3>{{ number_format($iteam->price, 0, ',', '.') }}<span>/Pernight</span></h3>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td>30 ft</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td>Max persion 3</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Bed:</td>
                                            <td>King Beds</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>Wifi, Television, Bathroom,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="{{ route('detail', ['id' => $iteam->room_id]) }}" class="primary-btn"
                                    style="color:rgb(0, 30, 255)">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div style="margin-left: 550px; margin-botton: -100px;">
                    {{ $rooms->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
