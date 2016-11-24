<template>
    <div class="form-group">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">
                <slot></slot>
            </button>

            <a class="btn btn-link" href="http://localhost:8000/password/reset">
                Forgot Your Password?
            </a>
        </div>
    </div>
</template>
