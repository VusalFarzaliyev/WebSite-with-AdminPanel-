<div id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Bizimlə əlaqə</h2>
                    <p> Forumdakı xanaları doldurun biz sizinlə əlaqə saxlayaq </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                <div class="contact">
                    <form method="post" action="{{"/"}}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <input class="contactus" placeholder="Ad" type="text" name="name" value="{{old("name")}}">
                            </div>
                            <div class="col-sm-12">
                                <input class="contactus" placeholder="Telefon nömrəsi" type="number" name="number" value="{{old("number")}}">
                            </div>
                            <div class="col-sm-12">
                                <input class="contactus" placeholder="E-poçt" type="email" name="email" value="{{old("email")}}">
                            </div>
                            <div class="col-sm-12">
                                <textarea class="textarea" placeholder="Mesaj" type="text" name="message">{{old("message")}}</textarea>
                            </div>
                            <div class="col-sm-12">
                                <button class="send">Göndər</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                <div class="rable-box">
                    <figure>
                        <img src="/site/images/cac.png" alt="#" />
                </div>
            </div>
        </div>
    </div>
</div>
