<x-theme>

    <x-slot:pageTitle>Department</x-slot>

        <!-- Ticket Statuses -->
    <div class="ticket-widget-section">

        @isset($d)
            <p>D is set</p>
            @foreach ($d as $department)
                <p>{{ $department->department }}</p>
            @endforeach
        @endisset

        @isset($hello)
            <p>Hello isset</p>
        @endisset

        <div class="table-responsive">
            <table class="table table-hover">
                <caption>List of issues.</caption>
                <thead class="table-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Department</th>
                        <th scope="col">Status</th>
                        <th scope="col">Created</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
    
                    <tr>
                        <th scope="row">1</th>
                        <td>Forgot CRM Password</td>
                        <td>Ian Too</td>
                        <td>In Progress</td>
                        <td>23/09/2022 4:56 pm</td>
                        <td><a href="#">View</a></td>
                    </tr>
    
                    <tr>
                        <th scope="row">2</th>
                        <td>Error Loading Finesse </td>
                        <td>Moh</td>
                        <td>In Progress</td>
                        <td>23/09/2022 4:56 pm</td>
                        <td></td>
                    </tr>

                    <tr>
                        <th scope="row">3</th>
                        <td>Error Loading Finesse</td>
                        <td>David</td>
                        <td>In Progress</td>
                        <td>23/09/2022 4:56 pm</td>
                        <td></td>
                    </tr>
    
                    <tr>
                        <th scope="row">4</th>
                        <td>CCMS Issue</td>
                        <td>Anonymous</td>
                        <td>In Progress</td>
                        <td>23/09/2022 4:56 pm</td>
                        <td></td>
                    </tr>
    
                </tbody>
            </table>
        </div>
    </div>

</x-theme>