@extends('layouts.app')

@section('content')

    <div>
        @livewire('student-show')
    </div>

@endsection

@push('script')
<script>
    window.addEventListener('close-modal', event => {
        console.log("tutup modal");
        $('#studentModal').modal('hide');
        $('#updateStudentModal').modal('hide');
        $('#deleteStudentModal').modal('hide');
    })
</script>
@endpush