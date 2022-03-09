<template>
    <Head title="Products" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Products
            </h2>

                                    <Link class="text-blue-700" :href="route('products.create')">Add</Link>
        </template>

        <div class="py-12">
            <div class="container mx-auto sm:px-6 lg:px-8">
                <div
                    class="
                        overflow-hidden
                        bg-white
                        shadow-sm
                        max-w-7xl
                        sm:rounded-lg
                    "
                >
                    <div class="p-6 bg-white border-b border-gray-200">
                        <table>
                            <thead class="font-bold bg-gray-300 border-b-2">
                                <td class="px-4 py-2">ID</td>
                                <td class="px-4 py-2">Name</td>
                                <td class="px-4 py-2">Description</td>
                                <td class="px-4 py-2">Price</td>
                                <td class="px-4 py-2">Action</td>
                            </thead>
                            <tbody>
                                <tr v-for="product in products.data" :key="product.id">
                                    <td class="px-4 py-2">{{ product.id }}</td>
                                    <td class="px-4 py-2">{{ product.name }}</td>
                                    <td class="px-4 py-2">
                                        {{ product.description }}
                                    </td>
                                    <td class="px-4 py-2">
                                        {{ product.price }}
                                    </td>
                                    <td class="px-4 py-2">

                                    <Link class="text-green-700" :href="route('products.edit', product.id)">Edit</Link>
                                     <Link @click="destroy(post.id)" class="text-red-700">Delete</Link>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <pagination class="mt-6" :links="products.links" />
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head ,Link} from "@inertiajs/inertia-vue3";
import Pagination from "@/Components/Pagination.vue";

export default {
    components: {
        BreezeAuthenticatedLayout,
        Head,
        Link,
        Pagination,
    },
    props: {
        products: Object,
    },
};
</script>

