import React from "react";
import { Head, usePage } from "@inertiajs/react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import MenuList from "@/Components/MenuList";
import MenuForm from "@/Components/MenuForm";
import Sidebar from "@/Components/Sidebar";

export default function Dashboard({ auth }) {
    const { menus } = usePage().props;
    const [showForm, setShowForm] = React.useState(false);

    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Menu Manager</h2>}
        >
            <Head title="Menu Manager" />

            <div className="flex">
                <Sidebar />
                <div className="flex-1 p-6 bg-gray-100">
                    <button
                        onClick={() => setShowForm(!showForm)}
                        className="bg-orange-500 text-white px-4 py-2 rounded mb-4"
                    >
                        {showForm ? "Cancel" : "Add Menu"}
                    </button>

                    {showForm && <MenuForm />}

                    <MenuList menus={menus} />
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
