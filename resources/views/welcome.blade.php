<x-theme>

    <x-slot:pageTitle>
        Dashboard
    </x-slot>

<div class="widget-section p-3 bg-light rounded">
    <h5>Summary</h5>
    <p>This widget should be able to show ticket statuses.</p>

    <p class="placeholder-glow">
        <span class="placeholder col-12"></span>
      </p>
</div>


<div class="p-3 bg-light rounded">
    <p>Issues Resolved: </p>
    <div class="progress">
        <div class="progress-bar w-75" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <p class="pt-2">Issues that are resolved are those that have been closed. Once an issue has been resolved, it means that it requires no further attention.</p>
</div>


<div class="widget-section p-3 bg-light rounded border">
    <h5>Service Level Management</h5>
    <p>This widget should be able to show adherance to service levels on issues.</p>
    <p>Issues include:-
        <ul>
            <li>Response SLA</li>
            <li>Resolution SLA</li>
        </ul>
    </p>
    <button type="button" class="btn btn-sm btn-outline-dark" data-bs-toggle="popover" data-bs-title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Go To Tickets</button>
</div>

<!-- User management widget -->
<div class="widget-section p-3 bg-light rounded border">
    <h5>Service Level Management</h5>
    <p>This widget should be able to show adherance to service levels on issues.</p>
    <p>Issues include:-
        <ul>
            <li>Response SLA</li>
            <li>Resolution SLA</li>
        </ul>
    </p>
    <button type="button" class="btn btn-sm btn-outline-dark" data-bs-toggle="popover" data-bs-title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Go To Tickets</button>
</div>
</x-theme>