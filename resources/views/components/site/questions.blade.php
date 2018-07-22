<ais-index
    app-id="VJ7H0WHYJB"
    api-key="9a478c406140e592ad58a0c255fb4d0f"
    index-name="dev_problems">
    <ais-search-box inline-template>
            <form
            role="search"
            action=""
            @submit.prevent="onFormSubmit"
            :class="bem('form')"
            >
            <slot>
                <div class="field has-addons has-addons-centered">
                    <p class="control is-expanded has-icons-right">
                        <ais-input
                        :search-store="searchStore"
                        placeholder="Search for a question..."
                        class="input is-medium"
                        >
                    </ais-input>
                    <span class="icon is-right">
                        <img src="/img/search-by-algolia.svg" alt="Search powered by Algolia">
                    </span>
                    </p>
                    <p class="control">
                        <button type="submit" class="button is-medium is-primary" :hidden="showLoadingIndicator && searchStore.isSearchStalled">
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
                <h2>
                    <ais-highlight :result="result" attribute-name="name"></ais-highlight>
                </h2>
            </template>
        </ais-results>
    </div>
</ais-index>