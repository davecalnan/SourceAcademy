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
                    <p class="control is-expanded">
                        <ais-input
                        :search-store="searchStore"
                        placeholder="Search for a question..."
                        class="input is-medium"
                        >
                    </ais-input>
                    </p>
                    <p class="control" style="width: 10em">
                        <button type="submit" class="button is-medium is-primary" :hidden="showLoadingIndicator && searchStore.isSearchStalled">
                            Search
                        </button>
                    </p>
                </div>
                
                <div v-if="showLoadingIndicator" :hidden="!searchStore.isSearchStalled" :class="bem('loading-indicator')" >
                    <slot name="loading-indicator" >
                        <svg width="1em" height="1em" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg" stroke="#000">
                            <g fill="none" fill-rule="evenodd">
                                <g transform="translate(1 1)" stroke-width="2">
                                    <circle stroke-opacity=".5" cx="18" cy="18" r="18"/>
                                    <path d="M36 18c0-9.94-8.06-18-18-18">
                                        <animateTransform
                                        attributeName="transform"
                                        type="rotate"
                                        from="0 18 18"
                                        to="360 18 18"
                                        dur="1s"
                                        repeatCount="indefinite"/>
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </slot>
                </div>
            
            </slot>
        </form>
    </ais-search-box>
    <div class="dropdown">
        <ais-results>
            <template slot-scope="{ result }">
                <answer>
                    <ais-highlight :result="result" attribute-name="question"></ais-highlight>
                </answer>
            </template>
        </ais-results>
    </div>
</ais-index>