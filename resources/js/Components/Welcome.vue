<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
</script>

<template>
    <div>
        <button v-if="$page.props.user.permissions.includes('create role')">Manage Roles</button>
        <button v-if="$page.props.user.permissions.includes('create lesson')">Manage Lessons</button>
    </div>
</template>

<style>
button {
    background-color: green;
    color: #f5f6f7;
    padding: 15px;
    margin: 10px;
    border-radius: 10px;
    transition: background-color 0.2s, transform 0.2s;
}

button:hover {
    background-color: rgb(20, 148, 20);
    transform: scale(1.1);
    cursor: pointer;
}
</style>
