import { __ } from "@wordpress/i18n";
import { useBlockProps } from "@wordpress/block-editor";
import "./editor.css";

export default function Edit() {
	return (
		<div className="placeholder-block" {...useBlockProps()}>
			<p>
				{__("Doctor Homes Hero", "doctor-homes")}
			</p>
		</div>
	);
}
