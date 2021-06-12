<template>
    <div>
        <h1 class="page-title">Laracasts Stats</h1>
        <ul>
            <li><strong>Total Series: </strong>{{ series }}</li>
            <li><strong>Total Lessons: </strong>{{ lessons }}</li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            series: 0,
            lessons: 0
        };
    },
    created() {
        axios.get('http://laracasts-assets.test/api/stats')
            .then(response => response.data)
            .then(data => {
                this.series = data.series;
                this.lessons = data.lessons;
            })
    }
};
</script>
