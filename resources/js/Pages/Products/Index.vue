
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
                                :href="route('products.create')"
                            >
                                Create
                            </Link>
                        </div>
 <table>
                            <thead class="font-bold bg-gray-300 border-b-2">
                                <td class="px-4 py-2">ID</td>
                                <td class="px-4 py-2">Image</td>
                                <td class="px-4 py-2">Name</td>
                                <td class="px-4 py-2">Description</td>
                                <td class="px-4 py-2">Price</td>
                                <td class="px-4 py-2">Action</td>
                            </thead>
                            <tbody>
                                <tr v-for="product in products.data" :key="product.id">
                                    <td class="px-4 py-2">{{ product.id }}</td>
                                    <td class="px-4 py-2"><img
                                            :src="product.image"
                                            class="object-cover h-40 w-80"
                                        /> </td>
                                    <td class="px-4 py-2">{{ product.name }}</td>
                                    <td class="px-4 py-2">
                                        {{ product.description }}
                                    </td>
                                    <td class="px-4 py-2">
                                        {{ product.price }}
                                    </td>
                                    <td class="px-4 py-2">

                                    <Link  class="px-6 py-2 mb-2 text-green-100 bg-green-500 rounded" :href="route('products.edit', product.id)">Edit</Link>
                                     <Link @click="destroy(post.id)"  class="px-6 py-2 mb-2 text-red-100 bg-red-500 rounded">Delete</Link>
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
        products: Object,
    },
};
</script>
