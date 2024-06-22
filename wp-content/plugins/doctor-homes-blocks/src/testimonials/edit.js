import { __ } from "@wordpress/i18n";
import { useBlockProps } from "@wordpress/block-editor";
import "./editor.css";

export default function Edit() {
	return (
		<div {...useBlockProps()}>
			<p>
				{__(
					"Testimonial Carousel – select testimonials in the sidebar.",
					"doctor-homes",
				)}
			</p>
		</div>
	);
}
