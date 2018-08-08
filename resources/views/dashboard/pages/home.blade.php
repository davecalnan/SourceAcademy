@extends('dashboard.master')

@section('meta-title', 'Dashboard')

@section('page-title', 'Your Dashboard: Website.com')

@section('main-class', 'dashboard.home')

@section('main')
<section class="website-progress">
    <card title="Website Progress">
        <div class="steps">
            <div class="step-item is-completed is-success">
                <div class="step-marker">
                    <span class="icon">
                        <i class="fa fa-check"></i>
                    </span>
                </div>
                <div class="step-details">
                    <p class="step-title">1. Form 📋</p>
                    <p>Thank you for filling out the form!</p>
                </div>
            </div>
            <div class="step-item is-active">
                <div class="step-marker">
                </div>
                <div class="step-details">
                    <p class="step-title">2. Proposal 📄</p>
                    <p>We are currently putting together your proposal. You'll get it in a few days.</p>
                </div>
            </div>
            <div class="step-item">
                <div class="step-marker"></div>
                <div class="step-details">
                    <p class="step-title">3. Skeleton ☠️</p>
                    <p>The skeleton is the layout of your site without the content.</p>
                </div>
            </div>
            <div class="step-item">
                <div class="step-marker"></div>
                <div class="step-details">
                    <p class="step-title">4. Content 📝</p>
                    <p>Once the skeleton of the site is in place we'll work with you to flesh out the content.</p>
                </div>
            </div>
            <div class="step-item">
                <div class="step-marker"></div>
                <div class="step-details">
                    <p class="step-title">5. Finishing touches 🍒</p>
                    <p>We put the final cherries on top to get your site finished!</p>
                </div>
            </div>
        </div>
    </card>
</section>
<section class="website-review">
    <card title="Website Review" subtitle="Click on the browser to give feedback your website.">
        @component('components.common.browser')
        @slot('type') with-url @endslot
        @slot('domain') castlegale.com @endslot
        @slot('url') https://castlegale.com @endslot
        @slot('src') /img/castlegale.com.jpg @endslot
        @slot('alt') Alt text @endslot
        @endcomponent
    </card>
</section>
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
<section class="helpful-links">
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
</section>
@endsection
