<div class="ctf-settings-cta" :class="{'ctf-show-features': freeCtaShowFeatures}" v-if="feedsList.length > 0 || legacyFeedsList.length > 0">
    <div class="ctf-cta-head-inner">
        <div class="ctf-cta-title">
            <div class="ctf-plugin-logo" v-if="!ctfRebrand" v-html="svgIcons.footer_twitter_logo"></div>
            <div class="ctf-plugin-logo" v-if="ctfRebrand" v-html="svgIcons.footer_x_logo"></div>
            <div class="ctf-plugin-title ctf-fb-fs">
                <div class="ctf-plugin-title-top ctf-fb-fs">
                    <h3>{{genericText.getMoreFeatures}}</h3>
                    <span class="ctf-cta-btn">
                        <a :href="upgradeUrl" class="ctf-btn-blue" target="_blank">
                            {{genericText.tryDemo}}
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.166016 10.6584L8.99102 1.83341H3.49935V0.166748H11.8327V8.50008H10.166V3.00841L1.34102 11.8334L0.166016 10.6584Z" fill="white"/>
                            </svg>
                        </a>
                    </span>
                </div>
                <div class="ctf-plugin-title-bt">
                    <span class="ctf-cta-discount-label">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.841 9.65008L10.341 2.15008C10.0285 1.84015 9.60614 1.6664 9.16602 1.66675H3.33268C2.89066 1.66675 2.46673 1.84234 2.15417 2.1549C1.84161 2.46746 1.66602 2.89139 1.66602 3.33342V9.16675C1.66584 9.38668 1.7092 9.60446 1.79358 9.80756C1.87796 10.0106 2.00171 10.195 2.15768 10.3501L9.65768 17.8501C9.97017 18.16 10.3926 18.3338 10.8327 18.3334C11.274 18.3316 11.6966 18.1547 12.0077 17.8417L17.841 12.0084C18.154 11.6973 18.3308 11.2747 18.3327 10.8334C18.3329 10.6135 18.2895 10.3957 18.2051 10.1926C18.1207 9.98952 17.997 9.80513 17.841 9.65008ZM10.8327 16.6667L3.33268 9.16675V3.33342H9.16602L16.666 10.8334L10.8327 16.6667ZM5.41602 4.16675C5.66324 4.16675 5.90492 4.24006 6.11048 4.37741C6.31604 4.51476 6.47626 4.70999 6.57087 4.93839C6.66548 5.1668 6.69023 5.41814 6.642 5.66061C6.59377 5.90309 6.47472 6.12582 6.2999 6.30063C6.12508 6.47545 5.90236 6.5945 5.65988 6.64273C5.4174 6.69096 5.16607 6.66621 4.93766 6.5716C4.70925 6.47699 4.51403 6.31677 4.37668 6.11121C4.23933 5.90565 4.16602 5.66398 4.16602 5.41675C4.16602 5.08523 4.29771 4.76729 4.53213 4.53287C4.76655 4.29844 5.0845 4.16675 5.41602 4.16675Z" fill="#663D00"/>
                        </svg>
                        {{genericText.liteFeedUsers}}
                    </span>
                </div>
            </div>
        </div>

    </div>
    <div class="ctf-cta-boxes" v-if="freeCtaShowFeatures">
       <div class="ctf-cta-box">
            <span class="ctf-cta-box-icon" v-html="svgIcons.ctaBoxes.displayPhotos"></span>
            <span class="ctf-cta-box-title">{{genericText.ctadisplayPhotos}}</span>
        </div>
        <div class="ctf-cta-box">
            <span class="ctf-cta-box-icon" v-html="svgIcons.ctaBoxes.multiple"></span>
            <span class="ctf-cta-box-title">{{genericText.ctaMultiple}}</span>
        </div>
        <div class="ctf-cta-box">
            <span class="ctf-cta-box-icon" v-html="svgIcons.ctaBoxes.layouts"></span>
            <span class="ctf-cta-box-title">{{genericText.ctaLayouts}}</span>
        </div>
        <div class="ctf-cta-box">
            <span class="ctf-cta-box-icon" v-html="svgIcons.ctaBoxes.types"></span>
            <span class="ctf-cta-box-title">{{genericText.ctaTypes}}</span>
        </div>
    </div>
    <div class="ctf-cta-much-more" v-if="freeCtaShowFeatures">
        <div class="ctf-cta-mm-left">
            <h4>{{genericText.andMuchMore}}</h4>
        </div>
        <div class="ctf-cta-mm-right">
            <ul>
                <li v-for="item in genericText.ctfFreeCTAFeatures">{{item}}</li>
            </ul>
        </div>
    </div>
</div>

<div class="ctf-cta-toggle-features" v-if="feedsList.length > 0 || legacyFeedsList.length > 0">
    <button class="ctf-cta-toggle-btn" @click="ctaToggleFeatures">
        <span v-if="!freeCtaShowFeatures">{{genericText.ctaShowFeatures}}</span>
        <span v-else>{{genericText.ctaHideFeatures}}</span>

        <svg v-if="freeCtaShowFeatures" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.91 15.41L12.5 10.83L17.09 15.41L18.5 14L12.5 8L6.5 14L7.91 15.41Z" fill="#141B38"/>
        </svg>

        <svg v-else width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.41 8.59009L12 13.1701L16.59 8.59009L18 10.0001L12 16.0001L6 10.0001L7.41 8.59009Z" fill="#141B38"/>
        </svg>
    </button>
</div>