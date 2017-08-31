<template>
    <div>
      <!-- Temp menu -->
      <router-link to="/">Home</router-link>
      <router-link to="/about">About</router-link>
      <router-link to="/content/1">Page</router-link>
      
        <template v-for="(region, index) in regions">
            <!-- Start empty section -->
            <template v-if="region.type == 'empty-section'">
                <template v-if="region.is_region == 'true'">
                    <!-- Here's empty section -->
                    <template v-for="(component, index) in region.components">
                        <template v-if="component =='Content'">
                          <router-view></router-view>
                        </template>
                        <template v-else>
                          <component :is="component" :key="component"></component>
                        </template>
                    </template>

                </template>
            </template>
            <!-- End empty section -->

            <!-- Start container & container-fluid -->
            <template v-if="region.type == 'container-fluid' || region.type == 'container'">
                <div v-bind:class="region.type">
                    <template v-for="(level_two, index) in region.level_two">
                        <!-- Level two raw type -->
                        <template v-if="level_two.type == 'row'">
                            <div class="row">
                                <template v-for="(column, columnKey) in level_two.columns">
                                    <div v-bind:class="'col-md-'+column.width">
                                        <template v-if="column.is_region == 'true'">
                                             <!-- Here's container column -->
                                            <template v-for="(component, index) in column.components">
                                                <template v-if="component =='Content'">
                                                  <router-view></router-view>
                                                </template>
                                                <template v-else>
                                                  <component :is="component" :key="component"></component>
                                                </template>
                                            </template>
                                        </template>
                                    </div>
                                </template>
                            </div>
                        </template>
                    </template>
                </div>
            </template>
            <!-- End container & container-fluid -->

            <!-- Start footer -->
            <template v-if="region.type == 'footer'">
                <footer class="container-fluid text-center">
                    <template v-if="region.is_region == 'true'">
                        <!-- Here's footer -->
                        <template v-for="(component, index) in region.components">
                          <template v-if="component =='Content'">
                            <router-view></router-view>
                          </template>
                          <template v-else>
                            <component :is="component" :key="component"></component>
                          </template>
                        </template>
                    </template>
                </footer>
            </template>
            <!-- End footer -->
        </template>
    </div>
</template>

<script>
    export default {
        created: function () {
            this.fetchRegions();
        },
        data: function() {
            return {
                regions: null,
            }
        },
        methods: {
            fetchRegions: function () {
                var self = this;
                $.get('/admin/structure/get-structure-with-components', function( data ) {
                    self.regions = data;
                });
            }
        }
    }
</script>
