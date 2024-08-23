import React, { useState } from "react";
import { Inertia } from "@inertiajs/inertia";

export default function MenuForm({ menu = null, onSubmit }) {
    const [name, setName] = useState(menu ? menu.name : "");

    const handleSubmit = (e) => {
        e.preventDefault();
        if (menu) {
            // Update
            Inertia.put(`/menus/${menu.id}`, { name });
        } else {
            // Create
            Inertia.post("/menus", { name });
        }
    };

    return (
        <form onSubmit={handleSubmit} className="p-6 bg-white shadow-md rounded-md">
            <label className="block text-gray-700 font-bold mb-2">Menu Name</label>
            <input
                type="text"
                value={name}
                onChange={(e) => setName(e.target.value)}
                className="border p-2 w-full mb-4"
                placeholder="Enter menu name"
            />
            <button
                type="submit"
                className="bg-blue-500 text-white px-4 py-2 rounded-md"
            >
                {menu ? "Update Menu" : "Add Menu"}
            </button>
        </form>
    );
}
