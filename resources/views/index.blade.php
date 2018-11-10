@extends('master.main')


@section('header')
    <header class="header">

        <!-- menu -->
        <div class="top-menu">
            <ul>
                <li class="active">
                    <a href="#about-card">
                        <span class="icon ion-person"></span>
                        <span class="link">About</span>
                    </a>
                </li>
                <li>
                    <a href="#resume-card">
                        <span class="icon ion-android-list"></span>
                        <span class="link">Resume</span>
                    </a>
                </li>
                <li>
                    <a href="#works-card">
                        <span class="icon ion-paintbrush"></span>
                        <span class="link">Works</span>
                    </a>
                </li>
                <li>
                    <a href="#blog-card">
                        <span class="icon ion-chatbox-working"></span>
                        <span class="link">Blog</span>
                    </a>
                </li>
                <li>
                    <a href="#contacts-card">
                        <span class="icon ion-at"></span>
                        <span class="link">Contact</span>
                    </a>
                </li>
            </ul>
        </div>

    </header>
@endsection
@section('content')

    <!--
            Card - About
        -->
    <div class="card-inner animated active" id="about-card">
        <div class="card-wrap">

            <!--
                About
            -->
            <div class="content about">

                <!-- title -->
                <div class="title">About Me</div>

                <!-- content -->
                <div class="row">
                    <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                        <div class="text-box">
                            <p>
                                {{ wordwrap($info->about) }}
                            </p>
                        </div>
                        <div class="info-list">
                            <ul>
                                <li><strong>Age . . . . .</strong> {{ $info->age }}</li>
                                <li><strong>Residence . . . .
                                        .</strong> {{ $info->residence }}</li>
                                <li><strong>Address . . . .
                                        .</strong>{{ $info->address }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>

            </div>

            <!--
                Services
            -->
            <div class="content services">

                <!-- title -->
                <div class="title">My Services</div>

                <!-- content -->
                <div class="row service-items border-line-v">

                @foreach($info->services as $service)

                    <!-- service item -->
                        <div class="col col-d-6 col-t-6 col-m-12">
                            <div class="service-item">
                                <div class="icon"><span class="ion {{ $service->pic }}"></span></div>
                                <div class="name">{!! $service->title !!}</div>
                                <p>
                                    {!! $service->description !!}
                                </p>
                            </div>
                        </div>
                    @endforeach
                    <div class="clear"></div>
                </div>

            </div>

            <!--
                Price Tables
            -->
            <!--
            <div class="content pricing">

                <!-- title
                <div class="title">Pricing</div>

                <!-- content
                <div class="row pricing-items">

                    <!-- pricing item
                    <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                        <div class="pricing-item">
                            <div class="icon"><i class="ion ion-speedometer speed-basic"></i></div>
                            <div class="name">Basic</div>
                            <div class="amount">
                                <span class="dollar">$</span>
                                <span class="number">22</span>
                                <span class="period">hour</span>
                            </div>
                            <div class="feature-list">
                                <ul>
                                    <li>Web Development</li>
                                    <li>Advetising</li>
                                    <li>Game Development</li>
                                    <li class="disable">Code Writing</li>
                                    <li class="disable">Photography <strong>new</strong></li>
                                </ul>
                            </div>
                            <div class="lnks">
                                <a href="#" class="lnk">
                                    <span class="text">Buy Basic</span>
                                    <i class="ion ion-speedometer speed-basic"></i>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="clear"></div>
                </div>

            </div>
-->
            <!--
                Fun Fact
            -->
            @if(sizeof($info->facts) > 0)
                <div class="content fuct">

                    <!-- title -->
                    <div class="title">Fun Fact</div>

                    <!-- content -->
                    <div class="row fuct-items">
                    @foreach($info->facts as $fact)
                        <!-- fuct item -->
                            <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
                                <div class="fuct-item">
                                    <div class="icon"><span class="ion {{ $fact->ion }}"></span></div>
                                    <div class="name">{!! $fact->title !!}</div>
                                </div>
                            </div>
                        @endforeach
                        <div class="clear"></div>
                    </div>

                </div>
        @endif
        <!--
                    Clients
                -->
            <div class="content clients">

                <!-- title -->
                <div class="title">Clients</div>

                <!-- content -->
                <div class="row client-items">
                    @if(sizeof($info->clients) > 0)
                        @foreach($info->clients as $client)

                            <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
                                <div class="client-item">
                                    <div class="image">
                                        <a target="_blank" href="{{ $client->link }}">
                                            <img src="images/clients/{{ $client->png }}.png"
                                                 alt="{{ $client->alt }}"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
                            <strong> <a class="btn btn-info" href="https://t.me/{{ $info->telegram }}"> be the First
                                    One !</a> </strong>
                        </div>

                    @endif
                    <div class="clear"></div>
                </div>

            </div>

        </div>
    </div>

    <!--
        Card - Resume
    -->
    <div class="card-inner" id="resume-card">
        <div class="card-wrap">

            <!--
                Resume
            -->
            <div class="content resume">

                <!-- title -->
                <div class="title">Resume</div>

                <!-- content -->
                <div class="row">

                    <!-- experience -->
                    <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                        <div class="resume-title border-line-h">
                            <div class="icon"><i class="ion ion-briefcase"></i></div>
                            <div class="name">Experience</div>
                        </div>

                    @foreach($info->resumes as $resume)
                        @if(!$resume->education)
                            <!-- resume item -->
                                <div class="resume-items">
                                    <div class="resume-item border-line-h @if($resume->current)
                                            active
@endif">
                                        <div class="date">{{ $resume->data }}</div>
                                        <div class="name">{{ $resume->title }}</div>
                                        <div class="company">{{ $resume->company }}</div>
                                        <p>
                                            {!! wordwrap($resume->description) !!}
                                        </p>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>

                    <!-- education -->
                    <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                        <div class="resume-title border-line-h">
                            <div class="icon"><i class="ion ion-university"></i></div>
                            <div class="name">Education</div>
                        </div>
                    @foreach($info->resumes as $resume)
                        @if($resume->education)
                            <!-- resume item -->
                                <div class="resume-items">
                                    <div class="resume-item border-line-h @if($resume->current)
                                            active
@endif">
                                        <div class="date">{{ $resume->data }}</div>
                                        <div class="name">{{ $resume->title }}</div>
                                        <div class="company">{{ $resume->company }}</div>
                                        <p>
                                            {!! wordwrap($resume->description)  !!}
                                        </p>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>

                    <div class="clear"></div>
                </div>

            </div>

            <!--
                Skills
            -->
            <div class="content skills">

                <!-- title -->
                <div class="title">My Skills</div>

                <!-- content -->
                <div class="row">

                    <!-- skill item -->
                    <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                        <div class="skills-list">
                            <div class="skill-title border-line-h">
                                <div class="icon"><i class="ion ion-easel"></i></div>
                                <div class="name">Design</div>
                            </div>
                            <ul>

                                @foreach($info->skills as $skill)
                                    @if(!$skill->coding)
                                        <li class="border-line-h">
                                            <div class="name">{{ $skill->title }}</div>
                                            <div class="progress">
                                                <div class="percentage" style="width:{{ $skill->level }}%;"></div>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach

                            </ul>
                        </div>
                    </div>

                    <!-- skill item -->
                    <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                        <div class="skills-list">
                            <div class="skill-title border-line-h">
                                <div class="icon"><i class="ion ion-code"></i></div>
                                <div class="name">Coding</div>
                            </div>
                            <ul>

                                @foreach($info->skills as $skill)
                                    @if($skill->coding)
                                        <li class="border-line-h">
                                            <div class="name">{{ $skill->title }}</div>
                                            <div class="progress">
                                                <div class="percentage" style="width:{{ $skill->level }}%;"></div>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach

                            </ul>
                        </div>
                    </div>

                    <div class="clear"></div>
                </div>

            </div>

        </div>
    </div>

    <!--
        Card - Works
    -->
    <div class="card-inner" id="works-card">
        <div class="card-wrap">

            <!--
                Works
            -->
            <div class="content works">

                <!-- title -->
                <div class="title">Recent Works</div>

                <!-- filters -->
                <div class="filter-menu filter-button-group">
                    <div class="f_btn active">
                        <label><input type="radio" name="fl_radio" value="grid-item"/>All</label>
                    </div>
                    <div class="f_btn">
                        <label><input type="radio" name="fl_radio" value="photo"/>Photo</label>
                    </div>
                    <div class="f_btn">
                        <label><input type="radio" name="fl_radio" value="video"/>Video</label>
                    </div>
                    <div class="f_btn">
                        <label><input type="radio" name="fl_radio" value="code"/>Code</label>
                    </div>
                    <div class="f_btn">
                        <label><input type="radio" name="fl_radio" value="design"/>Design</label>
                    </div>
                </div>

                <!-- content -->
                <div class="row grid-items border-line-v">
                @foreach($info->works as $work)
                    @if($work->type == "photo")
                        <!-- work item photo -->
                            <div class="col col-d-6 col-t-6 col-m-12 grid-item photo border-line-h">
                                <div class="box-item">
                                    <div class="image">
                                        <a href="{{ asset('works/' . $work->file) }}" class="has-popup-image">
                                            <img src="{{ asset('works/' . $work->file) }}"
                                                 alt="{{ $work->description }}"/>
                                            <span class="info">
												<span class="ion ion-image"></span>
											</span>
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <a href="{{ asset('works/' . $work->file) }}"
                                           class="name has-popup-image">{{ $work->title }}</a>
                                        <div class="category">Photo</div>
                                    </div>
                                </div>
                            </div>
                    @elseif($work->type == "video")
                        <!-- work item video -->
                            <div class="col col-d-6 col-t-6 col-m-12 grid-item video border-line-h">
                                <div class="box-item">
                                    <div class="image">
                                        <a href="{{ $work->link }}" class="has-popup-video">
                                            <img src="{{ asset('works/' . $work->file) }}"
                                                 alt="{{ $work->description }}"/>
                                            <span class="info">
												<span class="ion ion-videocamera"></span>
											</span>
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <a href="https://vimeo.com/97102654"
                                           class="name has-popup-video">{{ $work->title }}</a>
                                        <div class="category">Video</div>
                                    </div>
                                </div>
                            </div>
                    @elseif($work->type == "code")
                        <!-- work item code -->
                            <div class="col col-d-6 col-t-6 col-m-12 grid-item code border-line-h">
                                <div class="box-item">
                                    <div class="image">
                                        <a href="{{ $work->link }}"
                                           class="has-popup-code">
                                            <img src="{{ asset('works/' . $work->file) }}"
                                                 alt="$work->description"/>
                                            <span class="info">
												<span class="ion ion-code-note"></span>
											</span>
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <a href="#" class="name has-popup">{{ $work->title }}</a>
                                        <div class="category">Code</div>
                                    </div>
                                </div>
                            </div>
                    @else
                        <!-- work item design -->
                            <div class="col col-d-6 col-t-6 col-m-12 grid-item design border-line-h">
                                <div class="box-item">
                                    <div class="image">
                                        <a href="#popup-{{ $work->id }}" class="has-popup-media">
                                            <img src="{{ asset('works/' . $work->file) }}"
                                                 alt="{{ $work->description }}"/>
                                            <span class="info">
												<span class="ion ion-images"></span>
											</span>
                                        </a>
                                    </div>
                                    <div class="desc">
                                        <a href="#popup-{{ $work->id }}"
                                           class="name has-popup-media">{{ $work->title }}</a>
                                        <div class="category">Design</div>
                                    </div>
                                    <div id="popup-1" class="popup-box mfp-fade mfp-hide">
                                        <div class="content">
                                            <div class="image">
                                                <img src="{{ asset('works/' . $work->file) }}"
                                                     alt="{{ $work->description }}">
                                            </div>
                                            <div class="desc">
                                                <div class="post-box">
                                                    <h1>{{ $work->title }}</h1>
                                                    <div class="blog-detail">Design</div>
                                                    <div class="blog-content">
                                                        {!! $work->content  !!}
                                                    </div>
                                                    <a href="{{ $work->link }}" class="button">
                                                        <span class="text">View Project</span>
                                                        <span class="arrow"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <div class="clear"></div>
                </div>

            </div>

        </div>
    </div>

    <!--
        Card - Blog
    -->
    <div class="card-inner blog" id="blog-card">
        <div class="card-wrap">

            <!--
                Blog
            -->
            <div class="content blog">

                <!-- title -->
                <div class="title">Latest Posts</div>

                <!-- content -->
                <div class="row border-line-v">
                @foreach($info->blogs as $blog)
                    <!-- blog item -->
                        <div class="col col-d-12 col-t-12 col-m-12 border-line-h">
                            <div class="box-item">
                                <div class="image">
                                    <a href="{{ url('/blog/' . $blog->id) }}">
                                        <img src="images/blog/{{ $blog->file }}" alt=""/>
                                        <span class="info">
												<span class="ion ion-document-text"></span>
											</span>
                                        <span class="date"><strong>{{ $blog->created_at->format('d') }}</strong>{{ $blog->created_at->format('M') }}</span>
                                    </a>
                                </div>
                                <div class="desc">
                                    <a href="{{ url('/blog/' . $blog->id) }}" class="name">{!! $blog->title !!}</a>
                                    <div class="category">{!! $blog->subject !!}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="clear"></div>
                </div>

            </div>

        </div>
    </div>

    <!--
        Card - Contacts
    -->
    <div class="card-inner contacts" id="contacts-card">
        <div class="card-wrap">

            <!--
                Conacts Info
            -->
            <div class="content contacts">

                <!-- title -->
                <div class="title">Get in Touch</div>

                <!-- content -->
                <div class="row">
                    <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                        <div class="info-list">
                            <ul>
                                <li><strong>Address : </strong> {{ $info->address }}</li>
                                <li><strong>Email : </strong> {{ $info->email }}</li>
                                <li><strong>Phone : </strong> {{ $info->number }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>

            </div>

            <!--
                Contact Form
            -->
            <div class="content contacts">

                <!-- title -->
                <div class="title">Contact Form</div>
                <!-- content -->
                <div class="row">
                    <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                        <div class="contact_form">
                            {!! Form::open(["url" => "/feedback", "class" => "cform","id" => "cform","method" => "post"]) !!}
                            <div class="row">
                                <div class="col col-d-6 col-t-6 col-m-12">
                                    <div class="group-val">
                                        {!! Form::text('name',old('name'),['placeholder' => 'Full Name','id' => 'name']) !!}
                                    </div>
                                </div>
                                <div class="col col-d-6 col-t-6 col-m-12">
                                    <div class="group-val">
                                        {!! Form::email('email',old('email'),['placeholder' => 'Email Address','id' => 'email']) !!}
                                    </div>
                                </div>
                                <div class="col col-d-12 col-t-12 col-m-12">
                                    <div class="group-val">
                                        {!! Form::textarea('message',old('message'),['placeholder' => 'Your Message Here !', 'id' => 'message']) !!}
                                    </div>
                                </div>
                                <div class="col col-d-12 col-t-12 col-m-12">
                                    <div class="group-val">
                                        {!! NoCaptcha::renderJs() !!}
                                        {!! NoCaptcha::display() !!}
                                    </div>
                                </div>

                                <div class="align-left">
                                    <a href="#" class="button" type="submit"
                                       onclick="$('#cform').submit(); return false;" id="submit">
                                        <span class="text">Send Message</span>
                                        <span class="arrow"></span>
                                    </a>
                                </div>
                            </div>
                            {!! Form::close() !!}
                            <div class="alert alert-success">
                                <p>Thanks, your message is sent successfully.</p>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>

            </div>

        </div>
    </div>

@endsection
