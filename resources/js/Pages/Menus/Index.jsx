import React, { useState } from "react";
import Sidebar from "@/Components/Sidebar";
import MenuForm from "@/Components/MenuForm";
import MenuList from "@/Components/MenuList";

export default function Index({ menus }) {
    const [showForm, setShowForm] = useState(false);

    return (
        <div className="flex">
            <Sidebar />
            <div className="flex-1 p-6 bg-gray-100">
                <h1 className="text-2xl font-bold mb-4">Menu Management</h1>

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
    );
}
