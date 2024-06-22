import { registerBlockType } from "@wordpress/blocks";
import { __ } from "@wordpress/i18n";
import "./style.css";
import Edit from "./edit";
import metadata from "./block.json";

registerBlockType(metadata.name, {
	edit: Edit,
});
