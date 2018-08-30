<template>
    <panel-item :field="field" >
        <div slot="value">
            <audio
                controls
                :src="src"
                :autoplay="autoplay"
                :preload="preload"
            />
        </div>
    </panel-item>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],
    data(){
        return {
            src: this.field.previewUrl,
            autoplay: false,
            preload: 'none'
        }
    },
    mounted(){
        // this.autoplay = this.field.autoplay
        // this.preload = this.field.preload
    }
}
</script>
