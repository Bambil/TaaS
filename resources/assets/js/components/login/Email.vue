<template>
    <div class="form-group">
        <label for="email" class="col-md-4 control-label"><slot></slot></label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control" name="email" value="" required autofocus>

        </div>
    </div>
</template>
