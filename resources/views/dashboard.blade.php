<table>
    @foreach ( $scheds as $sched)
    <thead style="border-block: 20px solid;">
        <tr>
            <td>{{ __('Enrollment Form Revised(2018)') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __('Cellphone no. ') }}</td>
            <td style="text-align: center; text-decoration: underline; font-weight: bold;">{{ "______".$sched->user->phone."______" }}</td>
        </tr>
        <tr>
            <td>{{ __('ZAMBOANGA CITY STATE POLYTECHNIC COLLEGE') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __('Email Address ') }}</td>
            <td style="text-align: center; text-decoration: underline; font-weight: bold;">{{ $sched->user->email }}</td>
        </tr>
        <tr>
            <td style="font-weight: bold;">{{ __('(Registrar\'s Copy)') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __('LRN ') }}</td>
            <td style="text-align: center;">{{ __('_______________________') }}</td>
        </tr>
        <tr>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __('TRB No. ') }}</td>
            <td style="text-align: center;">{{ __('_______________________') }}</td>
        </tr>
        <tr>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
        </tr>
        <tr>
            <td>{{ __('Family Name ') }}</td>
            <td>{{ __('Given Name ') }}</td>
            <td>{{ __('Middle Name ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td>{{ __('Date ') }}</td>
        </tr>
        <tr>
            <td style="text-align: center; font-weight: bold; text-transform: uppercase;">{{ $sched->user->lastname }}</td>
            <td style="text-align: center; font-weight: bold; text-transform: uppercase;">{{ $sched->user->firstname }}</td>
            <td style="text-align: center; font-weight: bold; text-transform: uppercase;">{{ $sched->user->middlename }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center; font-weight: bold;">{{ $sched->user->created_at }}</td>
        </tr>
        <tr>
            <td>{{ __('College / Department') }}</td>
            <td>{{ __('Curriculum / Program') }}</td>
            <td>{{ __('Major') }}</td>
            <td>{{ __(' ') }}</td>
            <td>{{ __(' ') }}</td>
            <td>{{ __(' ') }}</td>
            <td>{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td>{{ __('Student ID no. ') }}</td>
            <td>{{ __('Student Type') }}</td>
        </tr>
        <tr>
            <td style="text-align: center; font-weight: bold;">{{ $sched->user->department }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __('N/A') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center; font-weight: bold;">{{ $sched->user->studentId }}</td>
            <td style="text-align: center;font-weight: bold;">{{ $sched->user->student_type }}</td>
        </tr>
        <tr>
            <td>{{ __('Semester') }}</td>
            <td>{{ __('(PEC)') }}</td>
            <td>{{ __('Curriculum Year') }}</td>
            <td>{{ __('Sex') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
        </tr>
        <tr>
            <td style="text-align: center; font-weight: bold;">{{ $sched->user->semester }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center; font-weight: bold;">{{ $sched->user->curriculum_year }}</td>
            <td style="text-align: center; font-weight: bold;">{{ $sched->user->gender }}</td>
            <td>{{ __('Date of Birth: ') }}</td>
            <td style="text-align: center; font-weight: bold;">{{ $sched->user->birth_date }}</td>
            <td style="text-align: right;">{{ __('Age ') }}</td>
            <td style="text-align: center; font-weight: bold;">{{ $sched->user->age }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
        </tr>
        <tr>
            <td>{{ __('Status of Registration') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
        </tr>
        <tr>
            <td style="text-align: center; font-weight: bold;">{{ $sched->user->student_status }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
            <td style="text-align: center;">{{ __(' ') }}</td>
        </tr>
    </thead>
</table>
<table>
    <thead>
        <tr>
            <th style="text-align: center;">{{ ('Subject') }}</th>
            <th style="text-align: center;">{{ ('Unit\'s') }} </th>
            <th style="text-align: center;">{{ __('Day') }}</th>
            <th style="text-align: center;">{{ __('Time') }}</th>
            <th style="text-align: center;">{{ __('Section') }}</th>
            <th style="text-align: center;">{{ __('Room') }}</th>
            <th style="text-align: center;">{{ __('Final Rating') }}</th>
            <th style="ext-align: center;">{{ __('Remarks') }}</th>
            <th style="text-align: center;">{{ __('Posted by') }}</th>
            <th style="text-align: center;">{{ __('Instructor/Professor') }}</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="font-weight: bold;">{{ $sched->subjects }}</td>
            <td style="text-align: center; font-weight: bold;">{{ $sched->units }}</td>
            <td style="text-align: center; font-weight: bold;">{{ $sched->days }}</td>
            <td style="text-align: center; font-weight: bold;">{{ $sched->time }}</td>
            <td style="text-align: center; font-weight: bold;">{{ $sched->user->section }}</td>
            <td style="text-align: center; font-weight: bold;">{{ $sched->room }}</td>
            <td style="text-align: center; font-weight: bold;">{{ __(' ') }}</td>
            <td style="text-align: center; font-weight: bold;">{{ __(' ') }}</td>
            <td style="text-align: center; font-weight: bold;">{{ $sched->admin->name }}</td>
            <td style="text-align: center; font-weight: bold;"></td>
        </tr>
        <tr>
            {{-- <td style="text-align: center;">{{ $sched->user->firstname." ".$sched->user->lastname }}</td> --}}
            <td style="font-weight: bold;">{{ $sched->subjects }}</td>
            <td style="text-align: center; font-weight: bold;">{{ $sched->units }}</td>
            <td style="text-align: center; font-weight: bold;">{{ $sched->days }}</td>
            <td style="text-align: center; font-weight: bold;">{{ $sched->time }}</td>
            <td style="text-align: center; font-weight: bold;">{{ $sched->user->section }}</td>
            <td style="text-align: center; font-weight: bold;">{{ $sched->room }}</td>
            <td style="text-align: center; font-weight: bold;">{{ __(' ') }}</td>
            <td style="text-align: center; font-weight: bold;">{{ __(' ') }}</td>
            <td style="text-align: center; font-weight: bold;">{{ $sched->admin->name }}</td>
            <td style="text-align: center; font-weight: bold;"></td>
        </tr>
    </tbody>
    @endforeach
</table>
