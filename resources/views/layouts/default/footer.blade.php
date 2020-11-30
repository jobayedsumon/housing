<!-- Fixed right sidebar -START -->
<style>

.square {
background-color: #007BC0;
height: 30px;
width: 100px;
margin: auto;
border: black solid 1px;
position: absolute;
top: 5px;
display: none;
left: -110px;
border-radius: 3px;
}
.square p{
    font-size: 14px;
    padding-top: 2px;
    margin:0;
    color:#fff;
}
.right::after {
content: '';
height: 8px;
width: 8px;
position: absolute;
background-color:#007BC0;
top: 35%;
right: -5px;
border-top: black solid 1px;
border-left: black solid 1px;
transform: rotate(135deg);
}
.parent{
position: relative;
}
.parent:hover .square{
display: block;
}
.transform {
    height: 120px;
    font-size: 14px;
    margin-bottom: 7px;
    position: relative;
}
.transform span {
    transform: rotate(90deg);
    color: #fff;
    font-weight: 400;
    right: -40px;
    z-index: 0;
    opacity: 1;
}
.transform span:before {
    content: "";
    display: block;
    height: 8px;
    right: -4px;
    margin-top: -4px;
    position: absolute;
    top: 50%;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
    width: 8px;
    z-index: -2;
}
.applyButtonRotate {
    position: relative;
    right: 35px;
    bottom: 35px;
    transform: rotate(90deg);
    width: fit-content;
    width: -moz-fit-content;
    padding-right: 8px !important;
}

.applyButtonRotate a:hover {
    text-decoration: none;
}

.applyButtonRotate a:visited {
    text-decoration: none;
}

.applyButtonRotate a:active {
    text-decoration: none;
}

.listnone img {
    width: 30px;
}

.widget-social ul {
    display: flex;
    justify-content: space-evenly;
    list-style: none;
}

.footerPara {
    margin-bottom: 0;
}

</style>



<section id="fixed_contact">
    <ul>
        <li class="applyButtonRotate"><a data-toggle="modal" href="#" data-target="#myModal" class="transform"><span>APPLY&nbsp;ONLINE</span></a></li>
        <li class='parent'><a href="tel:+8809609200555"><i class='fa fa-phone'></i><div class="square right"><p>Call Us<p></div></a></li>
        <li class='parent'><a href="/location"><i class='fa fa-map-marker'></i><div class="square right"><p>Locate Us<p></div></a></li>
        <li class='parent'><a href="/contact-us"><i class='fa fa-envelope'></i><div class="square right"><p>Message Us<p></div></a></li>
    </ul>
</section>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>


            <div class="modal-body">
                <h2 class="text-center"><img src="/uploads/images/backend-logo.png">APPLY FOR LOAN</h2>
                <p class="text-center">Please fill-in the required information, so that our team can get in touch with you. </p><br>

                <form action="/loan-request" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="loan_type">What type of loan do you need?</label>
                        <select class="form-control" name="loan_type" style="height: calc(2.25rem + 10px);">
                            <option value="-1">Select</option>

                                <?php foreach(Helper::getLoanCategory() as $l):?>
                                <option value="{{ $l->name }}" >{{$l->name}}</option>
                                <?php endforeach; ?>

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="form-group">
                        <label for="address">Your Address </label>
                        <input type="text" class="form-control" name="address">
                    </div>

                    <div class="form-group">
                        <label for="email">Your Profession</label>
                        <select id="selectProfession" class="form-control" name="profession" onchange="changeFunc()" style="height: calc(2.25rem + 10px);">
                            <option selected value="business">Business</option>
                            <option value="service">Service Holder</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div id="business_fields">
                        <div class="form-group">
                            <label for="business_name">Your Business Name </label>
                            <input type="text" class="form-control" name="business_name">
                        </div>

                        <div class="form-group">
                            <label for="business_address">Your Business Address </label>
                            <input type="text" class="form-control" name="business_address">
                        </div>

                        <div class="form-group">
                            <label for="business_sector">Business Sector </label>
                            <input type="text" class="form-control" name="business_sector">
                        </div>


                        <div class="form-group">
                            <label for="business_experience">Business Experience </label>
                            <input type="text" class="form-control" name="business_experience">
                        </div>
                    </div>

                    <div id="service_fields" style="display: none">
                        <div class="form-group">
                            <label for="business_name">Your Company Name </label>
                            <input type="text" class="form-control" name="company_name">
                        </div>

                        <div class="form-group">
                            <label for="business_address">Your Company Address </label>
                            <input type="text" class="form-control" name="company_address">
                        </div>

                        <div class="form-group">
                            <label for="business_sector">Your Designation </label>
                            <input type="text" class="form-control" name="company_designation">
                        </div>

                    </div>

                    <div id="other_field" style="display: none">
                        <div class="form-group">
                            <label for="business_name">Other </label>
                            <input type="text" class="form-control" name="other">
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="email">Your District</label>
                        <select class="form-control" name="district" style="height: calc(2.25rem + 10px);">
                            <?php foreach(Helper::getDistrict() as $l):?>
                            <option value="{{ $l->name }}">{{$l->name}}</option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="contact_number">Contact number</label>
                        <input type="text" class="form-control" name="contact_number">
                    </div>

                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <button type="submit" class="btn btn-primary myButton">Submit</button>
                </form>


            </div>


        </div>
    </div>
</div>
</div>




<!-- Fixed right sidebar -END -->



<!-- The Modal -->
<div class="modal fade" id="location">
<div class="modal-dialog modal-xl">
  <div class="modal-content">

    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title text-uppercase">Locate Us</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>

    <!-- Modal body -->
    <div class="modal-body">
        <div class="container">
            <div class="row modal_loc">
                <div class="col-md-4">

                <h4 class="rate-number">Corporate Head Office</h4>
                <p> Concord Baksh Tower (7th floor)<br>
                Plot: 11-A, Road No.- 48, Block- CWN (A)<br>
                Gulshan- 2, Dhaka- 1212<br>
                Phone : +88 09609 200555<br>
                email: info@nationalhousingbd.com</p>


                </div>
                <div class="col-md-4">
                    <h4 class="rate-number"> Registared Head Office</h4>
                    <p> National Plaza (7th & 8th floor)<br>
                109 Bir Uttam C.R. Dutta Road, Dhaka-1205<br>
                Tel : 88-02-9670612-4, 88-02-9677181-2, 88-02-9669800<br>
                Fax : 88-02-9671016</p>

                </div>
                <div class="col-md-4">

               <h4 class="rate-number"> Investors' Relation Department</h4>
                <p> National Plaza (7th & 8th floor)<br>
                109 Bir Uttam C.R. Dutta Road, Dhaka-1205<br>
                Tel : 88-02-9670612-4, 88-02-9677181-2, Ext.-141<br>
                Fax : 88-02-9671016<br>
                email: share@nationalhousingbd.com</p>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal footer -->
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>

  </div>
</div>
</div>







<div class="footer section-space100">
    <!-- footer -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
               <!-- <div class="footer-logo">
                          <a href="{{ url('')}}">
                             @if(file_exists(public_path().'/uploads/images/'.config('sximo')['cnf_logo']) && config('sximo')['cnf_logo'] !='')
                              <img src="{{ asset('uploads/images/'.config('sximo')['cnf_logo'])}}" alt="{{ config('sximo')['cnf_appname'] }}" width="30" />
                              @else
                              <img src="{{ asset('uploads/logo.png')}}" alt="{{ config('sximo')['cnf_appname'] }}"  width="30" />
                              @endif
                        </a>
                </div> -->
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="widget-text mt40">
                    <!-- widget text -->
                    <p class="text-justify text-black">National Housing Finance and Investments Limited is always ready to stand beside you as one of the leading specialized home loan providers of the country. Our various home loan products are tailored to fulfill all your needs in the best possible way.</p>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <p class="address-text text-black"><span><i class="icon-placeholder-3 icon-1x"></i>
                             </span>Concord Baksh Tower (7th floor)<br><span class="adds">Plot: 11-A  Road No. - 48</span><br><span class="adds">Block- CWN (A), Gulshan-2</span><br>
                             <span class="adds">Dhaka- 1212</span>
                            </p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <p class="call-text"><span><i class="icon-phone-call icon-1x"></i></span>+88 09609 200555</p>
                        </div>
                    </div>
                </div>
                <!-- /.widget text -->
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="widget-footer mt40">
                    <!-- widget footer -->
                    <ul class="listnone">
                        <li><a href="/calculator">EMI Calculator</a></li>
                        <li><a href="/news-bulletin">News Bulletin</a></li>
                        <li><a href="/downloads">Download</a></li>
                        <li><a href="/complain-cell">Complain Cell</a></li>
                        <li><a href="/sitemap">Site Map</a></li>
                    </ul>
                </div>
                <!-- /.widget footer -->
            </div>



            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="widget-footer mt40">
                    <!-- widget footer -->
                    <ul class="listnone">
                        <li><a href="/csrs">CSR</a></li>
                        <li><a href="/news">News and Events</a></li>
                        <li><a href="/green-banking">Green Banking</a></li>
                        <li><a href="/contact-us">Contact Us</a></li>
                    </ul>
                </div>
                <!-- /.widget footer -->
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="widget-social mt40">
                    <!-- widget footer -->
                    <ul class="listnone">
                        <li><a href="https://bd.linkedin.com/company/national-housing-finance-and-investments-ltd">
                                <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE4LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDQ1NS43MzEgNDU1LjczMSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDU1LjczMSA0NTUuNzMxOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8Zz4NCgk8cmVjdCB4PSIwIiB5PSIwIiBzdHlsZT0iZmlsbDojMDA4NEIxOyIgd2lkdGg9IjQ1NS43MzEiIGhlaWdodD0iNDU1LjczMSIvPg0KCTxnPg0KCQk8cGF0aCBzdHlsZT0iZmlsbDojRkZGRkZGOyIgZD0iTTEwNy4yNTUsNjkuMjE1YzIwLjg3MywwLjAxNywzOC4wODgsMTcuMjU3LDM4LjA0MywzOC4yMzRjLTAuMDUsMjEuOTY1LTE4LjI3OCwzOC41Mi0zOC4zLDM4LjA0Mw0KCQkJYy0yMC4zMDgsMC40MTEtMzguMTU1LTE2LjU1MS0zOC4xNTEtMzguMTg4QzY4Ljg0Nyw4Ni4zMTksODYuMTI5LDY5LjE5OSwxMDcuMjU1LDY5LjIxNXoiLz4NCgkJPHBhdGggc3R5bGU9ImZpbGw6I0ZGRkZGRjsiIGQ9Ik0xMjkuNDMxLDM4Ni40NzFIODQuNzFjLTUuODA0LDAtMTAuNTA5LTQuNzA1LTEwLjUwOS0xMC41MDlWMTg1LjE4DQoJCQljMC01LjgwNCw0LjcwNS0xMC41MDksMTAuNTA5LTEwLjUwOWg0NC43MjFjNS44MDQsMCwxMC41MDksNC43MDUsMTAuNTA5LDEwLjUwOXYxOTAuNzgzDQoJCQlDMTM5LjkzOSwzODEuNzY2LDEzNS4yMzUsMzg2LjQ3MSwxMjkuNDMxLDM4Ni40NzF6Ii8+DQoJCTxwYXRoIHN0eWxlPSJmaWxsOiNGRkZGRkY7IiBkPSJNMzg2Ljg4NCwyNDEuNjgyYzAtMzkuOTk2LTMyLjQyMy03Mi40Mi03Mi40Mi03Mi40MmgtMTEuNDdjLTIxLjg4MiwwLTQxLjIxNCwxMC45MTgtNTIuODQyLDI3LjYwNg0KCQkJYy0xLjI2OCwxLjgxOS0yLjQ0MiwzLjcwOC0zLjUyLDUuNjU4Yy0wLjM3My0wLjA1Ni0wLjU5NC0wLjA4NS0wLjU5OS0wLjA3NXYtMjMuNDE4YzAtMi40MDktMS45NTMtNC4zNjMtNC4zNjMtNC4zNjNoLTU1Ljc5NQ0KCQkJYy0yLjQwOSwwLTQuMzYzLDEuOTUzLTQuMzYzLDQuMzYzVjM4Mi4xMWMwLDIuNDA5LDEuOTUyLDQuMzYyLDQuMzYxLDQuMzYzbDU3LjAxMSwwLjAxNGMyLjQxLDAuMDAxLDQuMzY0LTEuOTUzLDQuMzY0LTQuMzYzDQoJCQlWMjY0LjgwMWMwLTIwLjI4LDE2LjE3NS0zNy4xMTksMzYuNDU0LTM3LjM0OGMxMC4zNTItMC4xMTcsMTkuNzM3LDQuMDMxLDI2LjUwMSwxMC43OTljNi42NzUsNi42NzEsMTAuODAyLDE1Ljg5NSwxMC44MDIsMjYuMDc5DQoJCQl2MTE3LjgwOGMwLDIuNDA5LDEuOTUzLDQuMzYyLDQuMzYxLDQuMzYzbDU3LjE1MiwwLjAxNGMyLjQxLDAuMDAxLDQuMzY0LTEuOTUzLDQuMzY0LTQuMzYzVjI0MS42ODJ6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" /></a></li>
                        <li><a href="https://www.youtube.com/channel/UCCnjxPc8IPe9XkVw-2gDevA">
                                <img src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMnB0IiB2aWV3Qm94PSIwIC03NyA1MTIuMDAyMTMgNTEyIiB3aWR0aD0iNTEycHQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTUwMS40NTMxMjUgNTYuMDkzNzVjLTUuOTAyMzQ0LTIxLjkzMzU5NC0yMy4xOTUzMTMtMzkuMjIyNjU2LTQ1LjEyNS00NS4xMjg5MDYtNDAuMDY2NDA2LTEwLjk2NDg0NC0yMDAuMzMyMDMxLTEwLjk2NDg0NC0yMDAuMzMyMDMxLTEwLjk2NDg0NHMtMTYwLjI2MTcxOSAwLTIwMC4zMjgxMjUgMTAuNTQ2ODc1Yy0yMS41MDc4MTMgNS45MDIzNDQtMzkuMjIyNjU3IDIzLjYxNzE4Ny00NS4xMjUgNDUuNTQ2ODc1LTEwLjU0Mjk2OSA0MC4wNjI1LTEwLjU0Mjk2OSAxMjMuMTQ4NDM4LTEwLjU0Mjk2OSAxMjMuMTQ4NDM4czAgODMuNTAzOTA2IDEwLjU0Mjk2OSAxMjMuMTQ4NDM3YzUuOTA2MjUgMjEuOTI5Njg3IDIzLjE5NTMxMiAzOS4yMjI2NTYgNDUuMTI4OTA2IDQ1LjEyODkwNiA0MC40ODQzNzUgMTAuOTY0ODQ0IDIwMC4zMjgxMjUgMTAuOTY0ODQ0IDIwMC4zMjgxMjUgMTAuOTY0ODQ0czE2MC4yNjE3MTkgMCAyMDAuMzI4MTI1LTEwLjU0Njg3NWMyMS45MzM1OTQtNS45MDIzNDQgMzkuMjIyNjU2LTIzLjE5NTMxMiA0NS4xMjg5MDYtNDUuMTI1IDEwLjU0Mjk2OS00MC4wNjY0MDYgMTAuNTQyOTY5LTEyMy4xNDg0MzggMTAuNTQyOTY5LTEyMy4xNDg0MzhzLjQyMTg3NS04My41MDc4MTItMTAuNTQ2ODc1LTEyMy41NzAzMTJ6bTAgMCIgZmlsbD0iI2YwMCIvPjxwYXRoIGQ9Im0yMDQuOTY4NzUgMjU2IDEzMy4yNjk1MzEtNzYuNzU3ODEyLTEzMy4yNjk1MzEtNzYuNzU3ODEzem0wIDAiIGZpbGw9IiNmZmYiLz48L3N2Zz4=" /></a></li>
                        <li><a href="https://www.facebook.com/nhfil">
                                <img src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMnB0IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgd2lkdGg9IjUxMnB0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im01MTIgMjU2YzAgMTQxLjM4NjcxOS0xMTQuNjEzMjgxIDI1Ni0yNTYgMjU2cy0yNTYtMTE0LjYxMzI4MS0yNTYtMjU2IDExNC42MTMyODEtMjU2IDI1Ni0yNTYgMjU2IDExNC42MTMyODEgMjU2IDI1NnptMCAwIiBmaWxsPSIjNGE3YWZmIi8+PHBhdGggZD0ibTI2Ny4yMzQzNzUgNTExLjczODI4MWMxMzYuMTcxODc1LTUuODc4OTA2IDI0NC43NjU2MjUtMTE4LjEyMTA5MyAyNDQuNzY1NjI1LTI1NS43MzgyODEgMC0uOTk2MDk0LS4wMjczNDQtMS45ODgyODEtLjAzOTA2Mi0yLjk4NDM3NWwtMTc3LjY5OTIxOS0xNzcuNzAzMTI1LTE5MCAxOTguNTkzNzUgMTA1LjU2NjQwNiAxMDUuNTY2NDA2LTQ4LjY3NTc4MSA2Ni4xODM1OTR6bTAgMCIgZmlsbD0iIzAwNTNiZiIvPjxwYXRoIGQ9Im0zMzQuMjYxNzE5IDc1LjMxMjV2NTcuOTY4NzVzLTY2LjU1NDY4OC05LjY2MDE1Ni02Ni41NTQ2ODggMzMuMjc3MzQ0djQyLjkzNzVoNjAuMTEzMjgxbC03LjUxMTcxOCA2NS40ODA0NjhoLTUyLjYwMTU2M3YxNzAuNjc5Njg4aC02Ni41NTQ2ODd2LTE3MC42Nzk2ODhsLTU2Ljg5NDUzMi0xLjA3NDIxOHYtNjQuNDA2MjVoNTUuODIwMzEzdi00OS4zNzg5MDZzLTMuNjgzNTk0LTczLjQ1NzAzMiA2OC43MDMxMjUtODYuOTQ5MjE5YzMwLjA1ODU5NC01LjYwNTQ2OSA2NS40ODA0NjkgMi4xNDQ1MzEgNjUuNDgwNDY5IDIuMTQ0NTMxem0wIDAiIGZpbGw9IiNmZmYiLz48cGF0aCBkPSJtMzM0LjI2MTcxOSAxMzMuMjgxMjV2LTU3Ljk2ODc1cy0zNS40MjE4NzUtNy43NS02NS40ODA0NjktMi4xNDQ1MzFjLTQuNjk1MzEyLjg3NS05LjA2MjUgMi4wMDc4MTItMTMuMTM2NzE5IDMuMzQ3NjU2djM2OS4xNDA2MjVoMTIuMDYyNXYtMTcwLjY3OTY4OGg1Mi41OTc2NTdsNy41MTU2MjQtNjUuNDgwNDY4aC02MC4xMTMyODFzMCAwIDAtNDIuOTM3NSA2Ni41NTQ2ODgtMzMuMjc3MzQ0IDY2LjU1NDY4OC0zMy4yNzczNDR6bTAgMCIgZmlsbD0iI2RjZTFlYiIvPjwvc3ZnPg==" /></a></li>
                    </ul>
                </div>
                <!-- /.widget footer -->
            </div>
        </div>
    </div>
</div>
<!-- /.footer -->
<div class="tiny-footer">
    <!-- tiny footer -->
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <p class="footerPara">Copyright 2020 - National Housing Finance and Investments Limited || Designed by <a href="https://vmsl.com.bd/"> VMSL</a></p>
            </div>
            <div class="col-md-8 col-lg-8 text-right">
                <p class="footerPara"><a class="priv" href="/privacy-policy">Privacy Policy</a> | <a class="priv" href="/disclaimer">Disclaimer</a></p>

            </div>
        </div>
    </div>
</div>
<!-- back to top icon -->
<a href="#0" class="cd-top" title="Go to top">Top</a>

<script src="{{ asset('theme') }}/js/jquery-ui.js"></script>
<script type="text/javascript" src="{{ asset('theme') }}/js/menumaker.js"></script>

<!-- sticky header -->
<script type="text/javascript" src="{{ asset('theme') }}/js/jquery.sticky.js"></script>
<script type="text/javascript" src="{{ asset('theme') }}/js/sticky-header.js"></script>


<!-- slider script -->

<?php
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$key = explode('/',$actual_link);
if(end($key) != 'calculator'):  ?>
 <script type="text/javascript" src="{{ asset('theme') }}/js/owl.carousel.min.js"></script>
<?php endif; ?>
<script type="text/javascript" src="{{ asset('theme') }}/js/slider-carousel.js"></script>
<script type="text/javascript" src="{{ asset('theme') }}/js/service-carousel.js"></script>
<!-- Back to top script -->
<script src="{{ asset('theme') }}/js/back-to-top.js" type="text/javascript"></script>
<script src="{{ asset('theme') }}/js/custom.js" type="text/javascript"></script>
<script src="{{ asset('theme') }}/js/accordion.js" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('theme') }}/js/simple-slider.js"></script>


<script>
jQuery(document).on('submit','.career #formField',function(){
    jQuery("input[type='text']").each(function(){
            if (jQuery.trim(jQuery(this).val()).length == 0){
                jQuery(this).addClass("highlight");
                jQuery(this).after("<p class='text-danger'>Please Fill in the box!</p>");
                return false;
            }

    });
});
// jQuery(document).on('click','#menu-button',function(){
//     jQuery('#contact,#loan_dropdown,#deposit_dropdown,#home_product,#about_dropdown').hide();
// });
// jQuery(document).on('mouseover','#hidden_div, .top-bar',function(){
//     jQuery('#contact,#loan_dropdown,#deposit_dropdown,#home_product,#about_dropdown').hide();
// });

$("a.page-scroll.nav-link").click(function() {
    $('html, body').animate({
        scrollTop: $($(this).attr('href')).offset().top-100
    }, 500);
});

function changeFunc() {
    var selectProfession = document.getElementById("selectProfession");
    var selectedProfession = selectProfession.options[selectProfession.selectedIndex].value;
    if (selectedProfession=="business"){
        $('#business_fields').show();
        $('#service_fields').hide();
        $('#other_field').hide();
    }
    else if (selectedProfession=="service"){
        $('#service_fields').show();
        $('#business_fields').hide();
        $('#other_field').hide()
    } else if (selectedProfession=="other"){
        $('#other_field').show();
        $('#service_fields').hide();
        $('#business_fields').hide();
    }
}


</script>

</script>












</body>
</html>
