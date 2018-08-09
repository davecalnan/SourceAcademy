@extends('dashboard.master')

@section('meta-title', 'Dashboard')

@section('page-title', 'Welcome to your Dashboard 🎉')

@section('main-class', 'dashboard.home')

@section('main')
<section class="website-progress">
    <card title="Website Progress">
        @if ($project->options->form_submitted === "true")
            @include('components.dashboard.website-progress.state-2')
        @else
            @include('components.dashboard.website-progress.state-1')
        @endif
    </card>
</section>
{{-- <section class="website-review">
    <card title="Website Review" subtitle="Click on the browser to give feedback your website.">
        @component('components.common.browser')
        @slot('type') with-url @endslot
        @slot('domain') castlegale.com @endslot
        @slot('url') https://castlegale.com @endslot
        @slot('src') /img/castlegale.com.jpg @endslot
        @slot('alt') Alt text @endslot
        @endcomponent
    </card>
</section> --}}
<section class="get-help">
    <card title="Get Help">
        <form action="http://help.sourceacademy.co">
            <label class="label" for="q">Search our knowledge base</label>
            <div class="field has-addons">
                <div class="control is-expanded">
                    <input class="input" type="text" name="q" placeholder="How do I...">
                </div>
                <div class="control">
                    <button class="button is-primary" type="submit">
                        Search
                    </button>
                </div>
            </div>
        </form>
        <hr>
        <label class="label">Or get in touch with the Intercom bubble over there 👉🏻</label>
        <p>You can also email us on <a href="mailto:hi@sourceacadmey.co">hi@sourceacademy.co</a> if you'd prefer.</p>
    </card>
</section>
{{-- <section class="helpful-links">
    <card title="Helpful Links">
        <label class="label">Your website's homepage:</label>
        <a href="https://playground.sourceacademysites.com">https://playground.sourceacademysites.com</a>
        <hr>
        <label class="label">Your website's admin panel:</label>
        <a href="https://playground.sourceacademysites.com/wp-admin/">https://playground.sourceacademysites.com/wp-admin/</a>
    </card>
</section>
<section class="activity-feed">
    <card title="Activity Feed" subtitle="What's being done on your website">
        @if(count($dones))
        <table class="table is-fullwidth is-striped">
            <tbody>
                @foreach ($dones as $done)
                <tr>
                    <td><strong>{{ '@' . $done->user_name }}:</strong> {!! $done->text !!} <small style="float: right"><em>{{ $done->created_at->diffForHumans() }}</em></small></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p>No activity found.</p>
        @endif
        
        {{ $dones->links() }}
    </card>
</section> --}}
@endsection
