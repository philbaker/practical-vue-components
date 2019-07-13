<template>
    <div class="p-3">
        <ul class="flex border-b">
            <li v-for="tab in tabs" :class="{ '-mb-px': tab.isActive }" class="mr-1">
                <a :class="{ 'border-l border-t border-r rounded-t': tab.isActive  }"
                   class="bg-white inline-block py-2 px-4 text-blue-700 font-semibold"
                   :href="tab.href"
                   @click.prevent="selectTab(tab)"
                >
                    {{ tab.name }}
                </a>
            </li>
        </ul>
        <div class="tabs-details p-4">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Tabs",
        data() {
            return {tabs: []};
        },
        created() {
            this.tabs = this.$children;
        },
        methods: {
            selectTab(selectedTab) {
                this.tabs.forEach(tab => {
                    tab.isActive = (tab.href == selectedTab.href);
                });
            }
        }
    }
</script>
