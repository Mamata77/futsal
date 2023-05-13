<!DOCTYPE html>
<html lang="en">

@include('front.header')

<body>
    @include('front.top')

    @yields('content')
    
    @include('front.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    @include('front.bottom')
</body>

</html>