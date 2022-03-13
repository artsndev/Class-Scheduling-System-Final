<div class="card-body">
    <div class="table-responsive-sm ">
        <table class="table data-table table-sm table-bordered table-striped table-hover nowrap">
            <thead>
                <tr>
                    <th class="header text-center filter-select filter-exact" scope="col">{{ ('Subject') }}</th>
                    <th class="header text-center" scope="col">{{ ('Unit\'s') }} </th>
                    <th class="header filter-select filter-exact" scope="col">{{ __('Day') }}</th>
                    <th class="header filter-select filter-exact text-center" scope="col">{{ __('Time') }}</th>
                    <th class="header filter-select filter-exact text-center" scope="col">{{ __('Room') }}</th>
                    <th class="header filter-select filter-exact text-center" scope="col">{{ __('Instructor/Professor') }}</th>
                </tr>
            </thead>
            @foreach ( $scheds as $sched)
            <tbody>
                <tr>
                    <td class="text-center text-white" scope="row">{{ $sched->subjects }}</td>
                    <td class="text-center text-white" scope="row">{{ $sched->user->firstname }}</td>
                    <td class="text-center text-white" scope="row">{{ $sched->units }}</td>
                    <td class="text-center text-white" scope="row">{{ $sched->days }}</td>
                    <td class="text-center text-white" scope="row">{{ $sched->time }}</td>
                    <td class="text-center text-white" scope="row">{{ $sched->room }}</td>
                    <td class="text-center text-white" scope="row">{{ $sched->teacher->name }}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>
