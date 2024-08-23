import React from 'react';
import { Inertia } from '@inertiajs/inertia';

export default function MenuItem({ item, level = 0 }) {
    const handleEdit = () => {
        Inertia.visit(route('menus.edit', item.id));
    };

    const handleDelete = () => {
        if (confirm("Are you sure you want to delete this item?")) {
            Inertia.delete(route('menus.destroy', item.id));
        }
    };

    return (
        <div className={`menu-item bg-gray-${level === 0 ? '100' : level === 1 ? '200' : '300'} shadow-md p-4 my-2 rounded-md`}>
            <div className="flex justify-between items-center">
                <h3 className={`text-lg font-bold ${level === 0 ? 'text-blue-700' : level === 1 ? 'text-blue-500' : 'text-blue-300'}`}>{item.name}</h3>
                <div>
                    <button onClick={handleEdit} className="text-blue-500 mr-2 hover:underline">Edit</button>
                    <button onClick={handleDelete} className="text-red-500 hover:underline">Delete</button>
                </div>
            </div>
            {/* Submenus */}
            {item.submenus && item.submenus.length > 0 && (
                <div className="pl-6">
                    {item.submenus.map((submenu) => (
                        <MenuItem key={submenu.id} item={submenu} level={1} />
                    ))}
                </div>
            )}
            {/* Sub-submenus */}
            {item.subsubmenus && item.subsubmenus.length > 0 && (
                <div className="pl-6">
                    {item.subsubmenus.map((subsubmenu) => (
                        <MenuItem key={subsubmenu.id} item={subsubmenu} level={2} />
                    ))}
                </div>
            )}
        </div>
    );
}
