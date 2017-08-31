<template>
	<div id="page">
		<div v-for="item in pageContents">
			<div>{{ item.field_value }}</div>
		</div>
	</div>
</template>

<script>
    export default {
        created: function () {
            this.fetchPage();
        },
        data: function() {
            return {
                pageContents: []
            }
        },
        methods: {
            fetchPage: function () {
                var self = this;
                $.post('/admin/components/vue-path', {path: self.$route.path}, function( data ) {
                	console.log(data[0].field_value);
                    self.pageContents = data;
                });
            }
        }
    }
</script>
