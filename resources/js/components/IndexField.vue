<template>
    <audio 
        class="block w-full"
        controls
        :src="src"
        :autoplay="autoplay"
        :preload="preload"
    />
</template>

<script>
export default {
    props: ['resourceName', 'field'],
    data(){
        return {
            src: this.field.previewUrl,
            autoplay: false,
            preload: 'none'
        }
    }
}
</script>
