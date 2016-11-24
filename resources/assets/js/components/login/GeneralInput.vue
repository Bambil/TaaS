<template>
    <div class="form-group">
        <label for="form-input" class="col-md-4 control-label">{{ url }}<slot></slot></label>

        <div class="col-md-6 margin">
            <input id="form-input" type="input" class="form-control"
            name="input-form" required>

        </div>
        <slot name="errors">
        </slot>
    </div>
</template>

<style scoped>
.margin {
    margin-bottom: 1rem;
}
</style>

<script>
    export default {
        props: ['url']
    }
</script>
