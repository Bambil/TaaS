<template>
    <div class="form-group">
        <label :for="name" class="col-md-4 control-label"><slot></slot></label>

        <div class="col-md-6 margin">
            <input :id="name" type="input" class="form-control"
            :name="name" required>

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
        props: ['name']
    }
</script>
