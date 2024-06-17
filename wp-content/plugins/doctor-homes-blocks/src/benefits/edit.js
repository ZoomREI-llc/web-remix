import { __ } from "@wordpress/i18n";
import {
	useBlockProps,
	RichText,
	MediaUpload,
	MediaUploadCheck,
	InspectorControls,
} from "@wordpress/block-editor";
import { Button, PanelBody, TextControl } from "@wordpress/components";
import { v4 as uuidv4 } from "uuid";
import ErrorBoundary from "./ErrorBoundary";

const Edit = ({ attributes, setAttributes, clientId }) => {
	const { title, paragraph, benefitItems } = attributes;

	// Initialize default attributes if they are not set
	if (!title) {
		setAttributes({
			title: __("When to Reach Out to Doctor Homes", "doctor-homes-blocks"),
		});
	}
	if (!paragraph) {
		setAttributes({
			paragraph: __(
				"No matter what property-related life challenge you're facing, we can help you sell your house as-is for cash fast! We buy any house in any condition, and let you close on your timeline.",
				"doctor-homes-blocks",
			),
		});
	}
	if (benefitItems.length === 0) {
		setAttributes({
			benefitItems: [
				{
					id: 52,
					text: "Fixer Upper",
					url: "default-image-url-1",
					uuid: uuidv4(),
				},
				{
					id: 54,
					text: "Job Relocation",
					url: "default-image-url-2",
					uuid: uuidv4(),
				},
				{
					id: 50,
					text: "Downsizing or Upsizing",
					url: "default-image-url-3",
					uuid: uuidv4(),
				},
				{
					id: 53,
					text: "Inherited Property",
					url: "default-image-url-4",
					uuid: uuidv4(),
				},
			],
		});
	}

	const addItem = () => {
		const newItem = { id: 0, text: "", uuid: uuidv4(), url: "" };
		setAttributes({ benefitItems: [...benefitItems, newItem] });
	};

	const updateItem = (index, field, value) => {
		const items = [...benefitItems];
		items[index][field] = value;
		setAttributes({ benefitItems: items });
	};

	const removeItem = (index) => {
		const items = [...benefitItems];
		items.splice(index, 1);
		setAttributes({ benefitItems: items });
	};

	return (
		<ErrorBoundary>
			<InspectorControls>
				<PanelBody title={__("Settings", "doctor-homes-blocks")}>
					<TextControl
						label={__("Title", "doctor-homes-blocks")}
						value={title}
						onChange={(value) => setAttributes({ title: value })}
					/>
					<TextControl
						label={__("Paragraph", "doctor-homes-blocks")}
						value={paragraph}
						onChange={(value) => setAttributes({ paragraph: value })}
					/>
				</PanelBody>
			</InspectorControls>
			<div {...useBlockProps()}>
				<RichText
					tagName="h2"
					placeholder={__("Add title...", "doctor-homes-blocks")}
					value={title}
					onChange={(value) => setAttributes({ title: value })}
				/>
				<RichText
					tagName="p"
					placeholder={__("Add paragraph...", "doctor-homes-blocks")}
					value={paragraph}
					onChange={(value) => setAttributes({ paragraph: value })}
				/>
				<div className="benefits__grid">
					{benefitItems.map((item, index) => (
						<div className="benefits__item" key={item.uuid}>
							<div className="benefits__item--content">
								<MediaUploadCheck>
									<MediaUpload
										onSelect={(media) => updateItem(index, "url", media.url)}
										allowedTypes={["image"]}
										render={({ open }) => (
											<Button onClick={open}>
												{!item.url
													? __("Upload Image", "doctor-homes-blocks")
													: __("Change Image", "doctor-homes-blocks")}
											</Button>
										)}
									/>
								</MediaUploadCheck>
								{item.url && <img src={item.url} alt={item.text} />}
								<TextControl
									placeholder={__("Benefit Text", "doctor-homes-blocks")}
									value={item.text}
									onChange={(value) => updateItem(index, "text", value)}
								/>
								<Button onClick={() => removeItem(index)} isDestructive>
									{__("Remove", "doctor-homes-blocks")}
								</Button>
							</div>
						</div>
					))}
					<Button onClick={addItem} isPrimary>
						{__("Add Benefit", "doctor-homes-blocks")}
					</Button>
				</div>
			</div>
		</ErrorBoundary>
	);
};

export default Edit;
