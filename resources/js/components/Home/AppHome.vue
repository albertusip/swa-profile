<template>
    <div>
        <b-container 
            :style="{
                backgroundImage: `url(https://via.placeholder.com/${windowHeight}x460)`,
                height: '500px',
            }"
            fluid
            class="intro img-fluid"
        >
            
        </b-container>
        <b-container fluid>
            CONTENT
        </b-container>
    </div>
</template>

<script>
export default {
    data: () => ({
        windowHeight: 0
    }),
    mounted() {

            console.log(screen.width);
            
            this.windowHeight = screen.width;
        
    }
}
</script>
