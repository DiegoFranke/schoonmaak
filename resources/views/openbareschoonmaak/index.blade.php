
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('huurpleks') }}">View All sharks</a></li>
            <li><a href="{{ URL::to('openbareschoonmaak') }}">View All Openbare ruimtes</a></li>
        </ul>
    </nav>

    <h1>All the sharks</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>HuisNr</td>
            <td>Bezet?</td>
            <td>Schoon?</td>
            <td>Alle klachten per huis</td>
            <td>Start Date bezetting</td>
            <td>End Date</td>
        </tr>
        </thead>

        <tbody>
        @foreach($openbareschoonmaak as $key => $value)
            <tr>
                <td>{{ $value->description }}</td>
                <td>{{ $value->dag_schoon }}</td>


                <!-- we will also add show, edit, and delete buttons -->
                <td>

                    <!-- delete the shark (uses the destroy method DESTROY /sharks/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->

                    <!-- show the shark (uses the show method found at GET /sharks/{id} -->


                    <!-- edit this shark (uses the edit method found at GET /sharks/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('openbareschoonmaak/') }}">Edit this shark</a>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

