<footer class="app-footer">
    <div class="site-footer-right">
    
        <a href="http://appzone.in/" target="_blank">appzone</a>
       
        @php $version = Voyager::getVersion(); @endphp
        @if (!empty($version))
            - {{ $version }}
        @endif
    </div>
</footer>
