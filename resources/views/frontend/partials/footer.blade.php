<footer class="page-footer indigo darken-2">
    <div class="container">
        <div class="row">
            <div class="col m4 s12">
                <h5 class="white-text">About Us</h5>
                @if(isset($footersettings[0]) && $footersettings[0]['aboutus'])
                    <p class="grey-text text-lighten-4">{{ $footersettings[0]['aboutus'] }}</p>
                @else
                    <p class="grey-text text-lighten-4">Real estate company description goes here.</p>
                @endif
            </div>
            <style>
                .list-unstyled > li{
                    padding-bottom: 10px;
                }
            </style>
            <div class="col m4 s12">
                <h5 class="white-text ">Our Links</h5>
                <ul class="list-unstyled">
                    <li class=" {{ Request::is('property*') ? 'underline' : '' }}">
                        <a href="{{ route('property') }}" class="grey-text text-lighten-3">Properties</a>
                    </li>

                    <li class=" {{ Request::is('agents*') ? 'underline' : '' }}">
                        <a href="{{ route('agents') }}" class="grey-text text-lighten-3">Agents</a>
                    </li>

                    <li class=" {{ Request::is('gallery*') ? 'underline' : '' }}">
                        <a href="{{ route('gallery') }}" class="grey-text text-lighten-3">Gallery</a>
                    </li>

                    <li class=" {{ Request::is('contact') ? 'underline' : '' }}">
                        <a href="{{ route('contact') }}" class="grey-text text-lighten-3">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="col m4 s12">
                <h5 class="white-text">Newsletter</h5>
                <form action="" method="post">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="email" required placeholder="Email Address" class="form-control" name="" id="">
                        </div>
                        <div class="input-group-prepend">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            @if(isset($footersettings[0]) && $footersettings[0]['footer'])
                {{ $footersettings[0]['footer'] }}
            @else
                © Developed By
            @endif
        </div>
    </div>
</footer>