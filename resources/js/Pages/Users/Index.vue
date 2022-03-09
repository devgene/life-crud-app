
<template>
    <Head title="Products" />

    <BreezeAuthenticatedLayout>
         <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Products
            </h2>

        <div class="py-12">
            <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="mb-4">
                            <Link
                                class="px-6 py-2 mb-2 text-green-100 bg-green-500 rounded"
                                :href="route('users.create')"
                            >
                                Create
                            </Link>
                        </div>
 <table>
                            <thead class="font-bold bg-gray-300 border-b-2">
                                <td class="px-4 py-2">ID</td>
                                <td class="px-4 py-2">Name</td>
                                <td class="px-4 py-2">Email</td>
                                <td class="px-4 py-2">Action</td>
                            </thead>
                            <tbody>
                                <tr v-for="user in users.data" :key="user.id">
                                    <td class="px-4 py-2">{{ user.id }}</td>
                                    <td class="px-4 py-2">{{ user.name }}</td>
                                    <td class="px-4 py-2">
                                        {{ user.email }}
                                    </td>
                                    <td class="px-4 py-2">

                                    <Link  class="px-6 py-2 mb-2 text-green-100 bg-green-500 rounded" :href="route('users.edit', user.id)">Edit</Link>
                                     <Link v-if="$page.props.auth.user.id != user.id" @click="destroy(user.id)"  class="px-6 py-2 mb-2 text-red-100 bg-red-500 rounded">Delete</Link>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </template>
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import BreezeNavLink from "@/Components/NavLink.vue";
import { Head } from "@inertiajs/inertia-vue3";
import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        BreezeAuthenticatedLayout,
        Head,
        BreezeNavLink,
        Link,
    },

    props: {
        users: Object,
    },
};
</script>
