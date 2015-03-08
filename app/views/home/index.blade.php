@extends('layout.default')


@section('content')
    <!--HEADER-->
    <section id="hedbg">
        <div class="container">
            <a href="add"  class="btn btn-default">ობიექტის დამატება</a>
        </div>
    </section>
    <!--/HEADER-->

    <!--FILTER-->
    <section id="search">
        <div class="container">
            <div class="filter-bg">
                <!--LOCATION-->
                <div class="filter-selectors">
                    {{Form::open(array('url'=>'search'))}}
                    <select name="adress[]" class="selectpicker" title="მდებარეობა" multiple>
                        <option>ვარკეთილი</option>
                        <option>ისანი</option>
                        <option>სამგორი</option>
                        <option>ავლაბარი</option>
                        <option>რუსთაველი</option>
                        <option>თავისუფლება</option>
                        <option>ახმეტელი</option>
                        <option>დიდუბე</option>
                        <option>ღრმაღელე</option>
                    </select>
                </div>
                <!--/LOCATION-->
                <!--TYPE-->
                <div class="filter-selectors">
                    <select name="type[]" class="selectpicker" title="ობიექტის ტიპი" multiple>
                        <option>რესტორანი</option>
                        <option>კაფე</option>
                        <option>სწრაფი კვება</option>
                        <option>ბარი</option>
                    </select>
                </div>
                <!--/TYPE-->

                <input name="name" type="text" class="object-name" placeholder="სახელწოდება...">
                <input name="submit" class="btn btn-warning" type="submit" value="ძიება">


                <br>
                <div id="chechboxes">
                    <input name="sasmeli" class="checkbox" id="check-1" type="checkbox">
                    <label  tabindex="1" for="check-1" class="checkbox-label">სასმლის შეტანა</label>

                    <input name="musika" class="checkbox" id="check-2" type="checkbox">
                    <label tabindex="2" for="check-2" class="checkbox-label">ცოცხალი მუსიკა</label>

                    <input name="fexburti" class="checkbox" id="check-3" type="checkbox">
                    <label tabindex="3" for="check-3" class="checkbox-label">ფეხბურთის ტრანსლაცია</label>
                </div>
                {{Form::close()}}
            </div>
        </div>
    </section>
    <!--/FILTER-->

    <div class="container">
        <img src="images/advert.png" class="img-responsive advertismant1">
        <img src="images/advert.png" class="img-responsive advertismant2">
    </div>

    <!--OBJECTS-->
    <section id='news-feed-object'>
        <div class="container">
            <h4>პოპულარული ადგილები</h4>
            <a href="searched.html"><h5>ყველა დაწესებულება</h5></a>
            <div class="row">
                <!--SINGLE-->
                @foreach($vips as $vip)
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="thumbnail">
                        <div class="caption">
                            <a href="single/{{$vip->id}}" class="btn-default-view">სრულად</a>
                        </div>
                        <img src="images/image.png" class="img-responsive">
                        <h1>{{$vip->name}}</h1>
                        <h2>{{$vip->type}}</h2>
                    </div>
                </div>
                <!--/SINGLE-->

                @endforeach

            </div>
        </div>
    </section>
    <!--/OBJECTS-->


@stop