    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('huurpleks') }}">View All sharks</a></li>
            <li><a href="{{ URL::to('openbareschoonmaak') }}">View All Openbare ruimtes</a></li>
        </ul>
    </nav>

    <main style="background-color:rgba(0, 0, 0, 0.4);text-align: center;">
    <h1 style="color: White;" >Schoonmaak overzicht</h1>
   
    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table style="color: White;background-color:text-align: center;width: 50%;margin: 0 auto;" class="table">
        <thead style="width: 100%!important;padding-left: 10px;padding-right: 10px;width: 50%;margin: 0 auto;">
        <tr style="width: 100%!important;padding-left: 10px;padding-right: 10px;">
            <td style="padding-left: 10px;padding-right: 10px;">HuisNr</td>
            <td style="padding-left: 10px;padding-right: 10px;">Bezet?</td>
            <td style="padding-left: 10px;padding-right: 10px;">Schoon?</td>
            <td style="padding-left: 10px;padding-right: 10px;">Alle klachten per huis</td>
            <td style="padding-left: 10px;padding-right: 10px;">Start Date bezetting</td>
            <td style="padding-left: 10px;padding-right: 10px;">End Date</td>
        </tr>
        </thead>

        <tbody>
        @foreach($openbareschoonmaak as $key => $value)
            <tr>
                <td style="padding-left: 10px;padding-right: 10px;">{{ $value->description }}</td>
                <td style="padding-left: 10px;padding-right: 10px;">{{ $value->dag_schoon }}</td>


                <!-- we will also add show, edit, and delete buttons -->
                <td>

                    <!-- delete the shark (uses the destroy method DESTROY /sharks/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->

                    <!-- show the shark (uses the show method found at GET /sharks/{id} -->


                    <!-- edit this shark (uses the edit method found at GET /sharks/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('openbareschoonmaak/') }}">Edit </a>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</main>