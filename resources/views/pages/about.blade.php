@extends('layouts.app')

@section('content')
<div style="color:#000;background-color:#F5F5F5;padding:20px 40px;text-align:center">
<h3><b>About Us</b></h3>
<div class="row">
    <div class="col-md-6">
        
        <img src="/storage/Images/logo.png" class="card" style="width:100%">

    </div>
    <div class="col-md-6" style="padding:30px;">
        <p>Oaks & Pines Landscaping Ltd. is a full service, year-round landscaping company that has been meeting the
             needs of residential and commercial clients for over a decade. 
             The company’s reputation is built on its commitment to the timely execution of quality work.</p>
            
        <p>
            From custom design to comprehensive installation, our experienced and knowledgeable staff will create a 
            landscape that provides a more functional, pleasing and personal environment. We also offer complete 
            full-season maintenance services to keep our client’s landscape investment looking its best. 
            Our certified horticulturists will create radiant color and our turf professionals will keep our customer’s lawns green and healthy year-round.
        </p>
        <p>We understand the value of a well designed and beautifully maintained property.  A finely crafted landscape-design project reveals your home’s 
            untapped beauty and functionality.  Scheduled maintenance keeps your property in its best condition, year round, and helps preserve your home’s investment.  
            Our landscape designers and maintenance professionals will provide you with the expertise and service you want to achieve your dream and vision. </p>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-md-4">
        <i class='fas fa-tools' style="font-size:80px;color:#F4BC16"></i><br>
                    <h4 style="color:#F4BC16"><b>BEST VALUE</b></h4>
                    <p>We combine quality workmanship, superior knowledge and low prices to provide you with service unmatched by our competitors.</p>
    </div>
    <div class="col-md-4">
        <span class="glyphicon glyphicon-time" style="font-size:80px;color:#F4BC16"></span><br>
                    <h4 style="color:#F4BC16"><b>ON TIME</b></h4>
                    <p>We have the experience, personel and resources to make the project run smoothly. We can ensure a job is done on time.</p>
    </div>
    <div class="col-md-4">
        <i class='fas fa-calculator' style="font-size:80px;color:#F4BC16"></i><br>
                    <h4 style="color:#F4BC16"><b>WITHIN BUDGET</b></h4>
                    <p>Work with us involve a carefully planned series of steps, centered around a schedule we stick to and daily communication.</p>
    </div>
</div>
</div>
@endsection