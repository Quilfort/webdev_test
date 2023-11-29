@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <a href="/clicks" class="btn btn-outline-primary btn-sm">Go back</a>
            <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                <h1 class="display-4">New Day for a Click Attempt</h1>
                <p>Keep Clicking until you are ready</p>

                <hr>

                <form action="{{ route('clicks.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="control-group col-12">
                            <label for="startCount">Start Count</label>
                            <input type="text" id="startCount" class="form-control" name="startCount" value="{{ $latestEndCount ?? 0 }}" readonly>
                        </div>
                        <div class="control-group col-12 mt-2">
                            <label for="clicks">Clicks</label>
                            <input type="text" id="clicks" class="form-control" name="clicks" value="0" readonly>
                            <button type="button" id="incrementClicks" class="btn btn-primary mt-2">Increment Clicks</button>
                        </div>
                        <div class="control-group col-12 mt-2">
                            <label for="endCount">End Count</label>
                            <input type="text" id="endCount" class="form-control" name="endCount" value="{{ $latestEndCount ?? 0 }}" readonly>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="control-group col-12 text-center">
                            <button id="btn-submit" class="button">
                                Create Post
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<script>
    // Increment Clicks Button Logic
    document.getElementById('incrementClicks').addEventListener('click', function() {
        var clicksInput = document.getElementById('clicks');
        clicksInput.value = parseInt(clicksInput.value) + 1;

        // Update End Count based on Start Count and Clicks
        var startCount = parseInt(document.getElementById('startCount').value);
        var clicks = parseInt(clicksInput.value);
        var endCountInput = document.getElementById('endCount');
        endCountInput.value = startCount + clicks;
    });
</script>

@endsection