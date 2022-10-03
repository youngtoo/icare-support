<x-theme>

    <x-slot:pageTitle>Tickets</x-slot>

        <!-- Ticket Statuses -->
    <div class="ticket-widget-section">

        <div class="">
            <form action="" class="row row-cols-lg-auto g-3 align-items-center">
                @csrf
    
                <div class="col-auto">
                <label class="visually-hidden" for="autoSizingSelect">Preference</label>
                    <select class="form-select form-select-sm" id="autoSizingSelect">
                        <option selected>Choose...</option>
                        <option value="1">Resolved</option>
                        <option value="2">Unresolved</option>
                        <option value="3">Updated</option>
                        <option value="4">Pending</option>
                    </select>
                </div>
    
                <div class="col-auto">
                    <input type="date" class="form-control form-control-sm" id="from" placeholder="From">
                </div>
    
                <div class="col-auto">
                    <input type="date" class="form-control form-control-sm" id="to" placeholder="To">
                </div>

                <div class="col-auto">
                    <input type="submit" class="btn btn-sm btn-outline-dark" value="Filter">
                </div>

                <div class="col-auto">
                    <input type="button" class="btn btn-sm btn-outline-dark" value="New Issue">
                </div>
                
    
    
            </form>
        </div>

        <div class="table-responsive">
            <table class="table table-hover">
                <caption>List of issues.</caption>
                <thead class="table-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Issue</th>
                        <th scope="col">Staff</th>
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