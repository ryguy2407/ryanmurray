@extends('layouts.main')

@section('content')

    <div class="pt-5">
        <h2 class="text-center">
            I'm ({{ get_age() }} old <span style="font-size: 16px">automatically calculated from DOB</span>) have
            been married seven years and have two beautiful boys, and one fur baby.
        </h2>
        <hr class="my-5">
        <div class="row">
            <div class="col">
                <p>
                    Since the arrival of our first child in 2015, I have taken time
                    away from the office to raise our two children. In that time
                    I have still been working on web projects, just not in a full
                    time capacity, and as a freelancer.
                </p>
                <p>
                    You can download a copy of my <a href="https://drive.google.com/open?id=1iACw1bb06MsRLsqrmUfipJMao1UhpT-V" target="_blank">CV here</a>, most recently I was
                    contracted by digital agency <a href="http://newwordorder.com.au" target="_blank">New Word Order</a>
                    on a freelance basis.
                </p>
                <p>
                    The last couple of years we have been living in Townsville, QLD for
                    my wife's work as a Doctor at The Townsville Hospital, but are relocating
                    back to Brisbane at the end of 2019.
                </p>
            </div>
        </div>
    </div>

@stop