@extends('Metron.Main')
@section('title')
 Metron | Contact US
@endsection
@section('content')

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.740634511705!2d74.26952711510623!3d31.448806557819054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190171599c4df9%3A0x1e3f7a883cb14aee!2sShaukat+Khanum+Memorial+Cancer+Hospital+and+Research+Centre!5e0!3m2!1sen!2s!4v1566490726966!5m2!1sen!2s" width="100%" height="550px" frameborder="0" style="border:0" allowfullscreen></iframe>

    


<!--Contact Section-->
<section class="contact-section">
    <div class="auto-container">
        
        <h2><span class="theme_color">Get</span> <span style="color: #7a1700"> in Touch</span></h2>
        <div class="text">You can talk to our online representative at any time. Please use our Live Chat System on our website or Fill up below instant messaging programs. <br> Please be patient, We will get back to you. Our 24/7 Support, General Inquireies Phone: <span style="color: #7a1700">+29321-4033316</span></div>
        <div class="row clearfix">
            <div class="form-column col-lg-12 col-md-8 col-sm-12 col-xs-12">
                <div class="inner-column">
                    
                    <!--Contact Form-->
                    <div class="contact-form style-two">
                        <form method="#" action="#" id="contact-form">
                            <div class="row clearfix">
                                <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                    <input type="text" name="name" value="" placeholder="Name" required>
                                </div>
                                <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                    <input type="email" name="email" value="" placeholder="Email" required>
                                </div>
                                <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                    <input type="text" name="subject" value="" placeholder="Subject" required>
                                </div>
                                <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                    <input type="text" name="phone" value="" placeholder="Phone" required>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                    <textarea name="message" placeholder="Your Massage"></textarea>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                    <button type="submit" class="theme-btn btn-style-one">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
           
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="info-column col-md-3 col-sm-6 co-xm-1">
                
                <ul class="list-style-two">
                    <li><img src="{{url('Metron/images/flag/1.jpg')}}" alt="" class="icon"><strong>Pakistan</strong>Khyaban-E-Jinnah Road Lahore</li>
                    <li><img src="{{url('Metron/images/flag/2.jpg')}}" alt="" class="icon"><strong>Afganistan</strong>Into@Metronintl.Com</li>
                    <li><img src="{{url('Metron/images/flag/3.jpg')}}" alt="" class="icon"><strong>Qator</strong>+29321-4033316</li>
                    <li><img src="{{url('Metron/images/flag/4.jpg')}}" alt="" class="icon"><strong>Sudan</strong>Mon-Sat:9.30am to 7.00pm</li>
                </ul>
                
            </div>
            <!-- <div class="info-column col-md-3 col-sm-6 ">
                
                <ul class="list-style-two">
                    <li><span class="icon flaticon-envelope-1"></span><strong>Send your mail at</strong>Khyaban-E-Jinnah Road Lahore</li>
                    <li><span class="icon flaticon-envelope-1"></span><strong>Send your mail at</strong>Into@Metronintl.Com</li>
                    <li><span class="icon flaticon-envelope-1"></span><strong>Send your mail at</strong>+29321-4033316</li>
                    <li><span class="icon flaticon-envelope-1"></span><strong>Send your mail at</strong>Mon-Sat:9.30am to 7.00pm</li>
                </ul>
                
            </div>
            <div class="info-column col-md-3 col-sm-6">
                
                <ul class="list-style-two">
                    <li><span class="icon flaticon-technology-2"></span><strong>Have Any Question</strong>Khyaban-E-Jinnah Road Lahore</li>
                    <li><span class="icon flaticon-technology-2"></span><strong>Have Any Question</strong>Into@Metronintl.Com</li>
                    <li><span class="icon flaticon-technology-2"></span><strong>Have Any Question</strong>+29321-4033316</li>
                    <li><span class="icon flaticon-technology-2"></span><strong>Have Any Question</strong>Mon-Sat:9.30am to 7.00pm</li>
                </ul>
                
            </div>
            <div class="info-column col-md-3 col-sm-6">
                
                <ul class="list-style-two">
                    <li><span class="icon flaticon-clock-1"></span><strong>Working Hours</strong>Khyaban-E-Jinnah Road Lahore</li>
                    <li><span class="icon flaticon-clock-1"></span><strong>Working Hours</strong>Into@Metronintl.Com</li>
                    <li><span class="icon flaticon-clock-1"></span><strong>Working Hours</strong>+29321-4033316</li>
                    <li><span class="icon flaticon-clock-1"></span><strong>Working Hours</strong>Mon-Sat:9.30am to 7.00pm</li>
                </ul>
                
            </div> -->
        </div>
    </div>
</section>
<!--End Contact Section-->

@endsection

@section('scripts')
<script src="{{url('Metron/js/script.js')}}"></script>

@endsectionv