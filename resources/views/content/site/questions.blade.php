<ais-index
    app-id="{{ env('ALGOLIA_PROBLEMS_APP_ID') }}"
    api-key="{{ env('ALGOLIA_API_KEY') }}"
    index-name="{{ env('ALGOLIA_PROBLEMS_INDEX_NAME') }}">
    <ais-search-box inline-template>
        <form
            role="search"
            action=""
            @submit.prevent="onFormSubmit"
            :class="bem('form')"
            >
            <slot>
                <div class="field has-addons has-addons-centered">
                    <p class="control is-expanded">
                        <ais-input
                        :search-store="searchStore"
                        placeholder="Search for a question..."
                        class="input is-medium"
                        >
                        </ais-input>
                    </p>
                    <p class="control">
                        <button type="submit" class="button is-medium is-primary search" :hidden="showLoadingIndicator && searchStore.isSearchStalled">
                            Search
                        </button>
                    </p>
                </div>
            </slot>
        </form>
    </ais-search-box>
    <div class="dropdown">
        <ais-results>
            <template slot-scope="{ result }">
                <search-result>
                    <template slot="question">
                        <ais-highlight :result="result" attribute-name="question"></ais-highlight>
                    </template>
                    <template slot="answer">@{{ result.answer }}</template>
                </search-result>
            </template>
        </ais-results>
        <ais-no-results>
            No results found 🧐 <a onclick="Intercom('showNewMessage')">Send us a message</a> and we will answer your question directly.
        </ais-no-results>
    </div>
    <img src="/img/search-by-algolia.svg" alt="Search powered by Algolia" class="search-by-algolia">
</ais-index>