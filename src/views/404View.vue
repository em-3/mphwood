<script setup>

import { ref } from "vue"

const props = defineProps(["url"])

</script>

<template>
    <div class="centered">
        <h1 class="heading">Looks like this URL doesn't exist!</h1>
        <p class="after-heading">The URL: <span id="urlMonospaced">{{ url }}</span> doesn't lead to anything!</p>
        <h2>Suspect a Mistake?</h2>
        <p>Here's what you can try:</p>
        <dl id="notFoundList">
            <dt>Retype the URL</dt>
            <dd>
                <ul>
                    <li>Sometimes typos in the address bar can result in this page being displayed</li>
                    <li>Check commonly mistaken letters such as i and L being swapped</li>
                    <li>You can <a href="javascript:window.history.back()">go back a page</a> and try to navigate to your destination again</li>
                </ul>
            </dd>
            <dt>Clear your cache</dt>
            <dd>
                <ul>
                    <li>This site uses dynamic routing, and if you use the page during a site update, your browser could get lost</li>
                    <li>
                        To fix this, follow the instructions to clear your cache and cookies for your browser below (Warning: The following are external links, and do not contain content endorsed or controlled by Miller Pacific Hardwoods Ltd.)
                        <ul>
                            <li><a href="https://support.google.com/accounts/answer/32050">Chrome</a></li>
                            <li><a href="https://www.microsoft.com/en-us/microsoft-365-life-hacks/privacy-and-safety/how-to-clear-cache">Microsoft Edge</a></li>
                            <li><a href="https://support.mozilla.org/en-US/kb/how-clear-firefox-cache">Firefox</a></li>
                            <li><a href="https://support.apple.com/guide/ipad/clear-your-cache-ipad0bb843d8/ipados">Safari (iPadOS)</a></li>
                            <li><a href="https://support.apple.com/guide/iphone/clear-your-cache-iphacc5f0202/ios">Safari (iOS)</a></li>
                            <li><a href="https://support.apple.com/guide/safari/manage-cookies-sfri11471/mac">Safari (macOS)</a></li>
                            <li><a href="https://www.opera.com/use-cases/clean-browser-and-remove-trackers">Opera</a></li>
                        </ul>
                    </li>
                </ul>
            </dd>
        </dl>
    </div>
</template>

<style>
    #urlMonospaced {
        font-family: "Roboto Mono", monospace;
        background-color: var(--secondary-background-color);
    }

    #notFoundList {
        line-height: 2em;
    }

    #notFoundList dt {
        font-weight: bold;
    }
</style>