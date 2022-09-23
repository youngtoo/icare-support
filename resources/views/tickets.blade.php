<x-theme>

    <x-slot:pageTitle>Tickets</x-slot>

    <div class="">
        <form action="" class="row row-cols-lg-auto g-3 align-items-center">
            @csrf

            <div class="col-auto">
            <label class="visually-hidden" for="autoSizingSelect">Preference</label>
                <select class="form-select" id="autoSizingSelect">
                    <option selected>Choose...</option>
                    <option value="1">Resolved</option>
                    <option value="2">Unresolved</option>
                    <option value="3">Updated</option>
                    <option value="4">Pending</option>
                </select>
            </div>

            <div class="col-auto">
                <input type="date" class="form-control" id="from" placeholder="From">
            </div>

            <div class="col-auto">
                <input type="date" class="form-control" id="to" placeholder="To">
            </div>
            


        </form>
    </div>

    <!-- Ticket Statuses -->
    <div class="widget-section">
        
        <div class="row">

            <div class="card card-small m-2">
                <div class="card-body">
                    <h3>200</h3>
                    <p>Lifetime Issues</p>
                    
                </div>
            </div>
    
    
            <div class="card card-small m-2 bg-light">
                <div class="card-body">
                    <h3>35</h3>
                    <p>Resolved Issues Today</p>
                    
                </div>
            </div>

        </div>

    </div>

    <div class="">
        <button type="button" class="btn btn-sm btn-outline-dark" ><i data-feather="plus"></i> New Issue</button>
        <button type="button" class="btn btn-sm btn-outline-dark" ><i data-feather="plus"></i> Closed Issues</button>
        <button type="button" class="btn btn-sm btn-outline-dark" ><i data-feather="plus"></i> New Issue</button>
    </div>

</x-theme>