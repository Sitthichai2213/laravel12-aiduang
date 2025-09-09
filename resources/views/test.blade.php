@php
$record1  = "Chavalit";
$record2  = "";
$record3  = null;
@endphp

@isset($record1)
   $record1 is defined and is not null... <br>
@endisset

@empty($record2)
   $record2 is "empty" with empty string <br>
@endempty

@empty($record3)
   $record3 is "empty" with null <br>
@endempty
