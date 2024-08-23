import React from "react";
import MenuItem from "./MenuItem";

export default function MenuList({ menus }) {
    return (
        <div className="menu-list">
            {menus.length > 0 ? (
                menus.map((menu) => (
                    <MenuItem key={menu.id} item={menu} />
                ))
            ) : (
                <p>No menus available.</p>
            )}
        </div>
    );
}
