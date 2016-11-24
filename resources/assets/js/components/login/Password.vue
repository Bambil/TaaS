<template>
    <div class="form-group">
        <label for="password" class="col-md-4 control-label"><slot></slot></label>

        <div class="col-md-6 margin">
            <input id="password" type="password" class="form-control" name="password" required>

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
